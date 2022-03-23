<?php
session_start();

include_once 'app_config.php';

if (isset($_SESSION['LOGIN']) && $_SESSION['LOGIN'] == true) {
    ?>
    <section class="featured">
        <div class="content-wrapper">
            <hgroup class="title">
                <h2>Efectividade Mensal</h2>
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
                <p><a href="#" id="dialog-link" class="ui-state-default ui-corner-all"><span class="ui-icon ui-icon-newwin"></span>Nova Efectividade</a></p>
                <?php
                require_once "app_conect.php";
                $db = testdb_connect();
                $mapas = $db->query("select * from efectividade");
                ?>
                <table cellpadding="0" cellspacing="0" border="0" class="display" id="exampleOne">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ID</th>
                            <th>M&ecirc;s</th>
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
                                <td style="width: 50px; padding:0 10px;"><?php echo $mapa['idefectividade']; ?></td>
                                <td><a href="index.php?<?php echo md5('pagina efect imprimir'); ?>&idefectividade=<?php echo $mapa['idefectividade']; ?>" title="Visualizar Funcionários na Efectividade Mensal"><?php echo $mapa['mes']; ?></a></td>
                                <td><?php echo $mapa['ano']; ?></td>
                                <td><?php echo $mapa['datacriacao']; ?></td>
                                <td style="width: 250px; padding:0 10px; text-align: center;"> 
                                    <a href="index.php?<?php echo md5('pagina efect ver'); ?>&idefectividade=<?php echo $mapa['idefectividade']; ?>" title="Processar a Efectividade Mensal">Processar</a>
                                    |
                                    <a href="index.php?<?php echo md5('pagina mmnb'); ?>&idefectividade=<?php echo $mapa['idefectividade']; ?>" title="Alterar Efectividade Mensal">Alterar</a>
                                    |
                                    <a href="efectividade_eliminar.php?idefectividade=<?php echo $mapa['idefectividade']; ?>" onclick="return confirm('Deseja Realmente Eliminar?');">Eliminar</a>
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


<div id="dialog" title="Nova Efectividade">
    <div id="formulario">
        <form name="form" id="form" action="efectividade_nova.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <label>
                    <span>Ano Respectivo</span>
                    <select name="ano" id="anores" class="combos">
                        <?php
                        for ($i = date('Y') + 2; $i > 1999; $i--) {
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php } ?>
                    </select>
                </label>
                <label>
                    <span>Mês</span>
                    <select name="mes" id="mes" class="combos" style="width: 200px; ">
                        <option value="-1">ESCOLHA UM MÊS</option>
                        <option value="Janeiro">Janeiro</option>
                        <option value="Fevereiro">Fevereiro</option>
                        <option value="Março">Março</option>
                        <option value="Abril">Abril</option>
                        <option value="Maio">Maio</option>
                        <option value="Junho">Junho</option>
                        <option value="Julho">Julho</option>
                        <option value="Agosto">Agosto</option>
                        <option value="Setembro">Setembro</option>
                        <option value="Outubro">Outubro</option>
                        <option value="Novembro">Novembro</option>
                        <option value="Dezembro">Dezembro</option>
                    </select>
                </label>
                <label>
                    <span>Documento de Pontos</span>
                    <input type="file" name="documento" id="documento" />
                </label>
                <input type="submit" value="Gravar" name="btngravar" class="send" />
            </fieldset>
        </form>
    </div>
</div>