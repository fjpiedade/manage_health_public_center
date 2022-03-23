<?php
session_start();

include_once 'app_config.php';

if (isset($_SESSION['LOGIN']) && $_SESSION['LOGIN'] == true) {
    ?>
    <section class="featured">
        <div class="content-wrapper">
            <hgroup class="title">
                <h2>Notificações</h2>
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
                <table cellpadding="0" cellspacing="0" border="0" class="display" id="exampleOne">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Departamento</th>
                            <th>Categoria</th>
                            <th>Telefone</th>
                            <th>Email</th>
                            <th>Opera&ccedil;&otilde;es</th>
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
                                <td><?php echo $funcionarios['telefone']; ?></td>
                                <td><?php echo $funcionarios['email']; ?></td>
                                <td style="width: 120px; padding:0 10px;"> 
                                    <a href="index.php?<?php echo md5('pagina notificar'); ?>&id_funcionario=<?php echo $funcionarios['idfuncionario']; ?>" title="Enviar uma Notificação">Notificar</a>
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
    <?php
}
else
    header("Location: login.php");
?>