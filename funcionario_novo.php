
<script src="js/assets/fancybox/jquery.easing-1.3.pack.js"></script>
<script src="js/assets/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script src="js/assets/webcam/webcam.js"></script>
<script src="js/assets/js/script.js"></script>



<section class="featured">
    <div class="content-wrapper">
        <hgroup class="title">
            <h2>Novo Funcion&aacute;rio</h2>
        </hgroup>
    </div>
</section>
<div id="corpo">
    <div id="tabs">
        <ul>
            <li><a href="#tabs-1">Novo Funcion&aacute;rio</a></li>
        </ul>
        <div id="tabs-1">
            <?php
            require_once "app_conect.php";
            $db = testdb_connect();
            $categoria = $db->query("select * from categoria");
            $departamento = $db->query("select * from departamento");

            //idseccao,descricao,datacriacao,iddepartamento,idutilizador
            ?>

            <div id="formulario">
                <form name="form" id="form" action="funcionario_new.php" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <div id="part_one">
                            <label>
                                <span>Nome</span>
                                <input type="text" name="nome" value=""/>
                            </label>

                            <label>
                                <span>Nome Pai</span> 
                                <input type="text" name="nomepai" value=""/>  
                            </label>

                            <label>
                                <span>Nome M&atilde;e</span>
                                <input type="text" name="nomemae" id="nomemae" value=""/>
                            </label>

                            <label>
                                <span>Genero</span>
                                <select name="genero" class="combos">
                                    <option value="Masculino">Masculino</option>
                                    <option value="Feminino">Feminino</option>
                                </select>
                            </label>

                            <label>
                                <span>Data de Nascimento</span>
                                <input type="text" name="datanascimento" id="datanascimento" value=""/>
                            </label>

                            <label>
                                <span>BI</span> 
                                <input type="text" name="bi" value=""/>
                            </label>

                            <label>
                                <span>Estado Civil</span>
                                <select name="estadocivil" class="combos">
                                    <option value="Solteiro">Solteiro</option>
                                    <option value="Casado">Casado</option>
                                </select>
                            </label>

                            <label><span>Provincia</span>
                                <select name="provincia" class="combos">
                                    <option value="Luanda">Luanda</option>
                                    <option value="Benguela">Benguela</option>
                                </select>
                            </label>
                        </div>

                        <div id="part_two">
                            <label><span>Categoria</span>
                                <select name="categoria" class="combos">
                                    <?php foreach ($categoria as $cat) {
                                        ?>
                                        <option value="<?php echo $cat['idcategoria']; ?>"><?php echo $cat['descricao']; ?></option>
                                    <?php } ?>
                                </select>
                            </label>

                            <label>
                                <span>Departamento</span>
                                <select name="departamento" class="combos">
                                    <?php foreach ($departamento as $depa) {
                                        ?>
                                        <option value="<?php echo $depa['iddepartamento']; ?>"><?php echo $depa['descricao']; ?></option>
                                    <?php } ?>
                                </select>
                            </label>

                            <label>
                                <span>Telefone</span>
                                <input type="text" name="telefone" value=""/>
                            </label>

                            <label>
                                <span>Endere&ccedil;o</span>
                                <input type="text" name="endereco" value=""/>
                            </label>

                            <label>
                                <span>E-mail</span> 
                                <input type="text" name="email" value=""/>
                            </label>

                            <label>
                                <span>Banco</span> 
                                <input type="text" name="banco" value=""/>
                            </label>

                            <label>
                                <span>Conta</span>
                                <input type="text" name="conta" value=""/>
                            </label>

                            <label>
                                <span>Iban</span> 
                                <input type="text" name="iban" value=""/>
                            </label>
                        </div>
                        <input type="hidden" name="foto" id="foto" value=""/>
                        <input type="submit" name="btngravar" id="button" value="Gravar" class="send" />
                        <a href="index.php?<?php echo md5('pagina funcionario'); ?>">cancelar</a>
                    </fieldset>
                </form>
            </div>
            <div id="camera">
                <span class="tooltip"></span>
                <span class="camTop"></span>

                <div id="screen"></div>
                <div id="buttons">
                    <div class="buttonPane">
                        <a id="shootButton" href="" class="blueButton">Capturar!</a>
                    </div>
                    <div class="buttonPane hidden">
                        <a id="cancelButton" href="" class="blueButton">Cancelar</a> <a id="uploadButton" href="" class="greenButton">Carregar!</a>
                    </div>
                </div>

                <span class="settings"></span>
            </div>
        </div>
    </div>
</div>