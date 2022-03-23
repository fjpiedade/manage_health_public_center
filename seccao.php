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
                <h2>Secção</h2>
            </hgroup>
        </div>
    </section>
    <script type="text/javascript" src="js/ajax.js"></script>
    <div id="corpo">
        <?php
        require_once "app_conect.php";
        $db = testdb_connect();
        $seccao = $db->query("select s.idseccao, s.descricao secca, s.datacriacao, d.descricao depa, u.username 
from departamento d, seccao s, utilizador u where s.iddepartamento=d.iddepartamento 
and s.idutilizador=u.idutilizador");
        //idseccao,descricao,datacriacao,iddepartamento,idutilizador
        ?>
        <div id="tabs">
            <ul>
                <li><a href="#tabs-1">Secções</a></li>
            </ul>
            <div id="tabs-1">
                <p><a href="#" id="dialog-link" class="ui-state-default ui-corner-all"><span class="ui-icon ui-icon-newwin"></span>Nova Seccao</a></p>
                <table cellpadding="0" cellspacing="0" border="0" class="display" id="exampleOne">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Descri&ccedil;&atilde;o</th>

                            <th>Data Cria&ccedil;&atilde;o</th>
                            <th>Departamento</th>
                            <th>Criado por</th>
                            <th>Opera&ccedil;&otilde;es</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0;
                        foreach ($seccao as $sec) {
                            ?>
                            <tr>
                                <td><?php echo $sec['idseccao']; ?></td>
                                <td><?php echo $sec['secca']; ?></td> 
                                <td><?php echo $sec['datacriacao']; ?></td>
                                <td><?php echo $sec['depa']; ?></td>
                                <td><?php echo $sec['username']; ?></td>
                                <td style="width: 120px; padding:0 10px;">
                                    <a href="#?id=<?php echo $sec['idseccao']; ?>">Alterar</a>
                                    |
                                    <a href="eliminar_seccao.php?idseccao=<?php echo $sec['idseccao']; ?>" onclick="return confirm('Deseja Realmente Eliminar?');">Eliminar</a>
                                </td>
                                <?php $i++;
                            }
                            ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div id="dialog" title="Nova Seccao">
        <div id="formulario">
            <form name="form" id="form" action="seccao_nova.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <label>
                        <span>Descri&ccedil;&atilde;o</span>
                        <input type="text" name="nome" value=""/>
                    </label>
                    <label>
                        <span>Departamento</span>
                        <select name="departamento" class="combos">
                            <?php
                            $departamento = $db->query("select * from departamento");
                            foreach ($departamento as $departamentos) {
                                ?>
                            <option value="<?php echo $departamentos['iddepartamento']; ?>"><?php echo $departamentos['descricao']; ?></option>
    <?php } ?>
                        </select>
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
