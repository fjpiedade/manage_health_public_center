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
                <h2>Categoria</h2>
            </hgroup>
        </div>
    </section>
    <script type="text/javascript" src="js/ajax.js"></script>
    <div id="corpo">
        <?php
        require_once "app_conect.php";
        $db = testdb_connect();
        $categoria = $db->query("select * from categoria c, utilizador u where  c.idutilizador=u.idutilizador");
        //idseccao,descricao,datacriacao,iddepartamento,idutilizador
        ?>
        <div id="tabs">
            <ul>
                <li><a href="#tabs-1">Categoria</a></li>
            </ul>
            <div id="tabs-1">
                <p><a href="#" id="dialog-link" class="ui-state-default ui-corner-all"><span class="ui-icon ui-icon-newwin"></span>Nova Categoria</a></p>
                <table cellpadding="0" cellspacing="0" border="0" class="display" id="exampleOne">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Descri&ccedil;&atilde;o</th>
                            <th>Sal&aacute;rio</th>
                            <th>Criado por</th>
                            <th>Opera&ccedil;&otilde;es</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        foreach ($categoria as $cat) {
                            ?>
                            <tr>
                                <td><?php echo $cat['idcategoria']; ?></td>
                                <td><?php echo $cat['descricao']; ?></td> 
                                <td><?php echo $cat['salariomes']; ?></td>
                                <td><?php echo $cat['username']; ?></td>
                                <td style="width: 120px; padding:0 10px;"> 
                                    <a href="#?id=<?php echo $cat['idcategoria']; ?>">Alterar</a>
                                    |
                                    <a href="eliminar_categoria.php?idcategoria=<?php echo $cat['idcategoria']; ?>" onclick="return confirm('Deseja Realmente Eliminar?');">Eliminar</a></td>
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
    <div id="dialog" title="Nova Categoria">
        <div id="formulario">
            <form name="form" id="form" action="categoria_nova.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <label>
                        <span>Descri&ccedil;&atilde;o</span>
                        <input type="text" name="nome" value=""/>
                    </label>
                    <label>
                        <span>Sal&aacute;rio</span>
                        <input type="text" name="salario" value=""/>
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
