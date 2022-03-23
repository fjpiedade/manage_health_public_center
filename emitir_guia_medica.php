<?php
session_start();

include_once 'app_config.php';

if (isset($_SESSION['LOGIN']) && $_SESSION['LOGIN'] == true) {
    ?>
    <section class="featured">
        <div class="content-wrapper">
            <hgroup class="title">
                <h2>Emitir Guia Médica</h2>
            </hgroup>
        </div>
    </section>
    <div id="corpo">
        <div id="tabs">
            <ul>
                <li><a href="#tabs-1">Emitir Guia Médica</a></li>

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
                    <form name="form" id="form_user" action="pdf_guia_medica.php?id_funcionario=<?php echo $_GET['id_funcionario']; ?>" method="post" enctype="multipart/form-data" target="new">
                        <fieldset>
                            <label>
                                <span>ID</span>
                                <input type="text" name="id" id="id" value="<?php echo $_GET['id_funcionario']; ?>" disabled="true"/>
                            </label>
                            <label>
                                <span>Beneficiário</span>
                                <input type="text" name="nome" id="nome" value="<?php echo utf8_decode($funcionario->getNome()); ?>" disabled="true"/>
                            </label>

                            <label>
                                <span>Presente a</span>
                                <input type="text" name="presente" id="presente" value="Hospital Geral de Luanda"/>
                            </label>
                            
                            <label>
                                <span>Situação</span>
                                <textarea name="situacao" id="situacao" rows="5">Convulsões e Fratura de Gazes Invisiveis e Inflaveis Corporais</textarea>
                            </label>

                            <label>
                                <span>PRESCRIÇÃO MÉDICA</span>
                                <textarea name="prescricao" id="prescricao" rows="5">Alergico Crônico e Víciado em Alergia sensiveis.</textarea>
                            </label>
                            
                            <label>
                                <span>O Médico</span>
                                <input type="text" name="medico" id="medico" value="Cara que Atura Bem"/>
                            </label>
                            
                            <input type="submit" id="button" class="send" value="Emitir" name="emitir"/>
                            <a href="index.php?<?php echo md5('pagina medi'); ?>">cancelar</a>

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
