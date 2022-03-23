<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<?php
session_start();
include_once 'app_config.php';
if (isset($_SESSION['LOGIN']) && $_SESSION['LOGIN'] == true) {
    ?>
    <section class="featured">
        <div class="content-wrapper">
            <hgroup class="title">
                <h2>Função</h2>
            </hgroup>
        </div>
    </section>
    <script type="text/javascript" src="js/ajax.js"></script>
    <div id="corpo">
        <?php
        require_once "app_conect.php";
        $db = testdb_connect();
        $funcao = $db->query("select * from funcao f, utilizador u where f.idutilizador=u.idutilizador");
        //idseccao,descricao,datacriacao,iddepartamento,idutilizador
        ?>
        <div id="tabs">
            <ul>
                <li><a href="#tabs-1">Fun&ccedil;&otilde;es</a></li>
            </ul>
            <div id="tabs-1">
                <p><a href="#" id="dialog-link" class="ui-state-default ui-corner-all"><span class="ui-icon ui-icon-newwin"></span>Nova Fun&ccedil;&atilde;o</a></p>
                <table cellpadding="0" cellspacing="0" border="0" class="display" id="exampleOne">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Descri&ccedil;&atilde;o</th>
                            <th>Data Cria&ccedil;&atilde;o</th>
                            <th>Criado por</th>
                            <th>Opera&ccedil;&otilde;es</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        foreach ($funcao as $func) {
                            ?>
                            <tr>
                                <td><?php echo $func['idfuncao']; ?></td>
                                <td><?php echo $func['descricao']; ?></td> 
                                <td><?php echo $func['datacriado']; ?></td>

                                <td><?php echo $func['username']; ?></td>
                                <td style="width: 120px; padding:0 10px;">
                                    <a href="#?id=<?php echo $func['idfuncao']; ?>">Alterar</a>
                                    |
                                    <a href="eliminar_funcao.php?idfuncao=<?php echo $func['idfuncao']; ?>" onclick="return confirm('Deseja Realmente Eliminar?');">Eliminar</a></td>
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

    <div id="dialog" title="Nova Função">
        <div id="formulario">
            <form name="form" id="form" action="funcao_nova.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <label>
                        <span>Descri&ccedil;&atilde;o</span>
                        <input type="text" name="nome" value=""/>
                    </label>
                    <input type="submit" value="Gravar" name="btngravar" class="send" />
                </fieldset>
            </form>
        </div>
    </div>

    <?php
}
else
    header("Location: login.php");
?>
