<section class="featured">
    <div class="content-wrapper">
        <hgroup class="title">
            <h2>Perfil do Funcion&aacute;rio</h2>
        </hgroup>
    </div>
</section>
<div id="corpo">
    <div id="tabs">
        <ul>
            <li><a href="#tabs-1">Perfil do Funcion&aacute;rio</a></li>
            <li><a href="#tabs-2">Foto do Funcion&aacute;rio</a></li>
            <li><a href="#tabs-3">Documentos do Funcion&aacute;rio</a></li>
        </ul>
        <div id="tabs-1">
            <?php
            require_once "app_conect.php";
            $db = testdb_connect();
            if (isset($_GET['idrecebe'])) {
                $idfuncionario = (int) $_GET['idrecebe'];
                $funcionario = $db->query("select f.idfuncionario, f.nome, f.nomemae, f.nomepai,
                        f.datanascimento, f.telefone, f.genero, f.estadocivil, f.provincia, f.endereco,
                f.email, f.banco, f.iban, f.conta, f.bi, f.foto,c.descricao cat, d.descricao depa 
                from funcionario f, categoria c, departamento d 
                where f.idcategoria=c.idcategoria and f.iddepartamento=d.iddepartamento and idfuncionario=$idfuncionario");
            }

            //idseccao,descricao,datacriacao,iddepartamento,idutilizador
            ?>
            <div id="formulario">
                <?php foreach ($funcionario as $funcionarios) {
                    ?>
                    <form name="form" id="form" action="funcionario_new.php" method="post" enctype="multipart/form-data">
                        <fieldset>
                            <div id="part_one">
                                <label>
                                    <span>Nome</span>
                                    <input type="text" name="nome" value="<?php echo $funcionarios['nome']; ?>" disabled="true"/>
                                </label>

                                <label>
                                    <span>Nome Pai</span> 
                                    <input type="text" name="nomepai" value="<?php echo $funcionarios['nomepai']; ?>" disabled="true"/>  
                                </label>

                                <label>
                                    <span>Nome M&atilde;e</span>
                                    <input type="text" name="nomemae" id="nomemae" value="<?php echo $funcionarios['nomemae']; ?>" disabled="true"/>
                                </label>

                                <label>
                                    <span>Genero</span>
                                    <input type="text" name="genero" value="<?php echo $funcionarios['genero']; ?>"/>
                                </label>

                                <label>
                                    <span>Data de Nascimento</span>
                                    <input type="text" name="datanascimento" value="<?php echo $funcionarios['datanascimento']; ?>" disabled="true"/>
                                </label>

                                <label>
                                    <span>BI</span> 
                                    <input type="text" name="bi" value="<?php echo $funcionarios['bi']; ?>" disabled="true"/>
                                </label>

                                <label>
                                    <span>Estado Civil</span>
                                    <input type="text" name="estado_civil" value="<?php echo $funcionarios['estadocivil']; ?>" disabled="true"/>
                                </label>

                                <label><span>Provincia</span>
                                    <input type="text" name="provincia" value="<?php echo $funcionarios['provincia']; ?>" disabled="true"/>
                                </label>
                            </div>

                            <div id="part_two">
                                <label><span>Categoria</span>
                                    <input type="text" name="categoria" value="<?php echo $funcionarios['cat']; ?>" disabled="true"/>
                                </label>

                                <label>
                                    <span>Departamento</span>
                                    <input type="text" name="departamento" value="<?php echo $funcionarios['depa']; ?>" disabled="true"/>
                                </label>

                                <label>
                                    <span>Telefone</span>
                                    <input type="text" name="telefone" value="<?php echo $funcionarios['telefone']; ?>" disabled="true"/>
                                </label>

                                <label>
                                    <span>Endere&ccedil;o</span>
                                    <input type="text" name="endereco" value="<?php echo $funcionarios['endereco']; ?>" disabled="true"/>
                                </label>

                                <label>
                                    <span>E-mail</span> 
                                    <input type="text" name="email" value="<?php echo $funcionarios['email']; ?>" disabled="true"/>
                                </label>

                                <label>
                                    <span>Banco</span> 
                                    <input type="text" name="banco" value="<?php echo $funcionarios['banco']; ?>" disabled="true"/>
                                </label>

                                <label>
                                    <span>Conta</span>
                                    <input type="text" name="conta" value="<?php echo $funcionarios['conta']; ?>" disabled="true"/>
                                </label>

                                <label>
                                    <span>Iban</span> 
                                    <input type="text" name="iban" value="<?php echo $funcionarios['iban']; ?>" disabled="true"/>
                                </label>
                            </div>
                        </fieldset>
                    </form>
                <?php }
                ?>
            </div>
        </div>
        <div id="tabs-2">
            <?php if ($funcionarios['foto'] == "") { ?>
                <img src="Images/semfoto.jpg" width="250" height="200" alt="Sem Foto" />
            <?php } else {
                ?>
                <img src="<?php
                echo 'uploads/fotos/' . $funcionarios['foto'];
                ?>" width="250" height="200" alt="<?php echo $funcionarios['nome']; ?>"/>
                 <?php }
                 ?>
        </div>
        <div id="tabs-3">
            <p><a href="#" id="dialog-link" class="ui-state-default ui-corner-all"><span class="ui-icon ui-icon-newwin"></span>Novo Documento</a></p>
            <?php
            require_once "app_conect.php";
            $db = testdb_connect();
            $documentos = $db->query("select d.idfuncionario, d.iddocumento, d.descricao , d.caminho 
                from documento d 
                where d.idfuncionario =".$idfuncionario);
            /*
             * idfuncionario,nome,nomepai,nomemae,genero,provincia,datanascimento,
             * estadocivil,idcategoria,
             * iddepartamento,idutilizador,telefone,endereco,email,foto,bi,banco,conta,iban
             */
            ?>
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="exampleOne">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Descri&ccedil;&atilde;o</th>
                        <th>Opera&ccedil;&otilde;es</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($documentos as $documento) {
                        ?>
                        <tr>
                            <td style="width: 50px; padding:0 10px;"><?php echo $i; ?></td>
                            <td><?php echo strtoupper($documento['descricao']); ?></td>
                            <td style="width: 230px; padding:0 10px;"> 
                                <a href="<?php echo 'uploads/documentos/'.$documento['caminho']; ?>" target="new">Visualizar</a>
                                |
                                <a href="documento_eliminar.php?idfuncionario=<?php echo $documento['idfuncionario']; ?>&iddocumento=<?php echo $documento['iddocumento']; ?>" onclick="return confirm('Deseja Realmente Eliminar?');">Eliminar</a>
                            </td>
                            <?php
                            $i++;
                        }
                        ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>



<div id="dialog" title="Novo Documento">
    <div id="formulario">
        <form name="form" id="form" action="documento_novo.php?idfuncionario=<?php echo $idfuncionario;?>" method="post" enctype="multipart/form-data">
            <fieldset>
                <label>
                    <span>Descri&ccedil;&atilde;o</span>
                    <input type="text" name="descricao" value=""/>
                </label>
                <label>
                    <span>Documento</span>
                    <input type="file" name="documento" id="documento" />
                </label>
                <input type="submit" value="Gravar" name="btngravar" class="send" />
            </fieldset>
        </form>
    </div>
</div>