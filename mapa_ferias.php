<?php
session_start();

include_once 'app_config.php';

if (isset($_SESSION['LOGIN']) && $_SESSION['LOGIN'] == true) {
    ?>
    <section class="featured">
        <div class="content-wrapper">
            <hgroup class="title">
                <h2>Mapas de Férias</h2>
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
                <p><a href="#" id="dialog-link" class="ui-state-default ui-corner-all"><span class="ui-icon ui-icon-newwin"></span>Novo Mapa de Férias</a></p>
                <?php
                require_once "app_conect.php";
                $db = testdb_connect();
                $mapas = $db->query("select * from mapa_ferias");
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
                            <th>ID</th>
                            <th>Mapa</th>
                            <th>Ano</th>
                            <th>Data de Cria&ccedil;&atilde;o</th>
                            <th>Opera&ccedil;&otilde;es</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($mapas as $mapa) {
                            ?>
                            <tr>
                                <td style="width: 50px; padding:0 10px;"><?php echo $i; ?></td>
                                <td style="width: 50px; padding:0 10px;"><?php echo $mapa['idmapaferias']; ?></td>
                                <td><a href="index.php?<?php echo md5('pagina feria'); ?>&idmapaferias=<?php echo $mapa['idmapaferias']; ?>" title="Visualizar Funcionários no Mapa">MAPA DE F&Eacute;RIAS</a></td>
                                <td><?php echo $mapa['ano']; ?></td>
                                <td><?php echo $mapa['datacriacao']; ?></td>
                                <td style="width: 250px; padding:0 10px; text-align: center;"> 
                                    <a href="index.php?<?php echo md5('pagina feria add'); ?>&idmapaferias=<?php echo $mapa['idmapaferias']; ?>" title="Adicionar Funcionários no Mapa">Preencher</a>
                                    |
                                    <a href="index.php?<?php echo md5('pagina feria'); ?>&idmapaferias=<?php echo $mapa['idmapaferias']; ?>" title="Adicionar Funcionários no Mapa">Alterar</a>
                                    |
                                    <a href="eliminar_mapa.php?idmapaferias=<?php echo $mapa['idmapaferias']; ?>" onclick="return confirm('Deseja Realmente Eliminar?');">Eliminar</a>
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


<div id="dialog" title="Novo Mapa de Férias">
    <div id="formulario">
        <form name="form" id="form" action="mapa_ferias_novo.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <label>
                    <span>Ano Respectivo</span>
                    <select name="anores" id="anores" class="combos">
                        <?php
                        for ($i = date('Y')+2; $i > 1999; $i--) {
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php } ?>
                    </select>
                </label>
                <input type="submit" value="Gravar" name="btngravar" class="send" />
            </fieldset>
        </form>
    </div>
</div>