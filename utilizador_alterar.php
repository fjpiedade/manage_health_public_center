<?php
session_start();

include_once 'app_config.php';

if (isset($_SESSION['LOGIN']) && $_SESSION['LOGIN'] == true) {
    ?>
    <section class="featured">
        <div class="content-wrapper">
            <hgroup class="title">
                <h2>Alterar Utilizador</h2>
            </hgroup>
        </div>
    </section>
    <div id="corpo">
        <div id="tabs">
            <ul>
                <li><a href="#tabs-1">Alterar Utilizador</a></li>

            </ul>
            <div id="tabs-1">
                <!--<p><a href="index.php?<?php echo md5('pagina funcionario novo'); ?>" id="dialog-link" class="ui-state-default ui-corner-all"><span class="ui-icon ui-icon-newwin"></span>Novo Funcion&aacute;rio</a></p>-->

                <?php
                if (isset($_GET['id_user'])) {
                    $utilizador = new Utilizador();
                    $utilizador = Utilizador::findById($db, $_GET['id_user']);
                }
                ?>

                <div id="foto">
                    <img src="Images/semfoto.jpg" alt="Sem Foto" />
                </div><!--Fim do foto-->
                <div id="formulario">
                    <form name="form" id="form_user" action="update_utilizador.php?id_user=<?php echo $_GET['id_user']; ?>" method="post" enctype="multipart/form-data">
                        <fieldset>
                            <label>
                                <span>Nome</span>
                                <input type="text" name="nome" id="nome" value="<?php echo utf8_decode($utilizador->getUsername()); ?>"/>
                            </label>

                            <label>
                                <span>Estado</span>
                                <select name="estado" id="estado" class="combos">
                                    <option>Desactivo</option>
                                    <option>Activo</option>
                                </select>
                            </label>

                            <input type="submit" id="button" class="send" value="Alterar" name="alterar"/>
                            <a href="index.php?<?php echo md5('pagina utilizador'); ?>">cancelar</a>

                        </fieldset>

                    </form>
                </div>

            </div>
        </div>
    </div>
    <?php
}
else
    header("Location: login.php");
?>