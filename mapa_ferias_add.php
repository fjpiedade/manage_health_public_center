<!--<script type="text/javascript">
    $("#inicio").datepicker({dateFormat: 'yy/mm/dd'});
<script src="js/validationSigaPessoal.js"></script>
</script>-->

<?php
session_start();

include_once 'app_config.php';

if (isset($_SESSION['LOGIN']) && $_SESSION['LOGIN'] == true) {
    ?>
    <section class="featured">
        <div class="content-wrapper">
            <hgroup class="title">
                <h2>Adicionar Funcionários no Mapa</h2>
            </hgroup>
        </div>
    </section>
    <script type="text/javascript" src="js/ajax.js"></script>
    <div id="corpo">
        <div id="tabs">
            <ul>
                <li><a href="#tabs-1">Visualizar</a></li>
            </ul>
            <div id="tabs-1">
                <!--<p><a href="index.php?<?php echo md5('pagina funcionario novo'); ?>">Novo Funcion&aacute;rio</a></p>-->
                <?php
                require_once "app_conect.php";
                $db = testdb_connect();
                $funcionario = $db->query("select f.idfuncionario, f.nome, f.datanascimento, f.telefone, 
                f.email, c.descricao cat, d.descricao depa 
                from funcionario f, categoria c, departamento d 
                where f.idcategoria=c.idcategoria and f.iddepartamento=d.iddepartamento");
                /*
                 * idfuncionario,nome,nomepai,nomemae,genero,provincia,datanascimento,
                 * estadocivil,idcategoria,
                 * iddepartamento,idutilizador,telefone,endereco,email,foto,bi,banco,conta,iban
                 */
                ?>
                <form name="form" id="form_user_mapas" action="mapa_ferias_gravar.php?idmapaferias=<?php echo $_GET['idmapaferias']; ?>" method="post" enctype="multipart/form-data">
                    <table cellpadding="0" cellspacing="0" border="0" class="display" id="exampleOne">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Departamento</th>
                                <th>Categoria</th>
                                <th>Início</th>
                                <th>Fim</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 0;
                            foreach ($funcionario as $funcionarios) {
                                ?>
                                <tr>
                                    <td><?php echo $funcionarios['idfuncionario']; ?></td>
                                    <td><?php echo strtoupper($funcionarios['nome']); ?></td>
                                    <td><?php echo $funcionarios['depa']; ?></td>
                                    <td><?php echo $funcionarios['cat']; ?></td>
                                    <td><input type="text" name="inicio" id="inicio" style=" width: 100px;" /></td>
                                    <td><input type="text" name="fim" id="fim" style=" width: 100px;"/></td>
                                    <td style="width: 20px; padding:0 10px;"> 
                                        <input type="checkbox" name="check" id="check" style=" width: 30px;"/>
                                    </td>
                                    <?php
                                    $i++;
                                }
                                ?>
                            </tr>
                        </tbody>
                    </table>
                    <input type="submit" id="button" class="send" value="Processar" name="btnprocessar"/> 
                    <a href="pdf_mapa_ferias.php?idmapaferias=<?php echo $mapa['idmapaferias']; ?>" >Imprimir mapa vazia</a>
                </form>
            </div>
        </div>
    </div>
    <?php
}
else
    header("Location: login.php");
?>