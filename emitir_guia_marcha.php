<?php
session_start();

include_once 'app_config.php';

if (isset($_SESSION['LOGIN']) && $_SESSION['LOGIN'] == true) {
    ?>
    <section class="featured">
        <div class="content-wrapper">
            <hgroup class="title">
                <h2>Emitir Guia de Marcha</h2>
            </hgroup>
        </div>
    </section>
    <div id="corpo">
        <div id="tabs">
            <ul>
                <li><a href="#tabs-1">Emitir Guia de Marcha</a></li>

            </ul>
            <div id="tabs-1">
                <!--<p><a href="index.php?<?php echo md5('pagina funcionario novo'); ?>" id="dialog-link" class="ui-state-default ui-corner-all"><span class="ui-icon ui-icon-newwin"></span>Novo Funcion&aacute;rio</a></p>-->

                <?php
                if (isset($_GET['id_funcionario'])) {
                    $funcionario = new Funcionario();
                    $funcionario = Funcionario::findById($db, $_GET['id_funcionario']);
                }
                ?>

                <!--<div id="foto">
                    <img src="Images/semfoto.jpg" alt="Sem Foto" />
                </div><!--Fim do foto-->
                <div id="formulario">
                    <form name="form" id="form_user" action="pdf_guia_marcha.php?id_funcionario=<?php echo $_GET['id_funcionario']; ?>" method="post" enctype="multipart/form-data" target="new">
                        <fieldset>
                            <label>
                                <span>ID</span>
                                <input type="text" name="id" id="id" value="<?php echo $_GET['id_funcionario']; ?>" disabled="true"/>
                            </label>
                            <label>
                                <span>Nome</span>
                                <input type="text" name="nome" id="nome" value="<?php echo utf8_decode($funcionario->getNome()); ?>" disabled="true"/>
                            </label>

                            <label>
                                <span>Destino</span>
                                <input type="text" name="destino" id="destino" value="Posto de Sa??de Barra do Kwanza"/>
                            </label>

                            <label>
                                <span>Proveni??ncia</span>
                                <input type="text" name="proveniencia" id="proveniencia" value="Centro de Sa??de Materno Wenji Maka II"/>
                            </label>
                            
                            <input type="submit" id="button" class="send" value="Emitir" name="emitir"/>
                            <a href="index.php?<?php echo md5('pagina marcha'); ?>">cancelar</a>

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
