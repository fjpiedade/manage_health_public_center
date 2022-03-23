<?php
session_start();

include_once 'app_config.php';
require_once "app_conect.php";

if (isset($_SESSION['LOGIN']) && $_SESSION['LOGIN'] == true) {
    ?>
    <section class="featured">
        <div class="content-wrapper">
            <hgroup class="title">
                <h2>Continuar Transferência</h2>
            </hgroup>
        </div>
    </section>
    <div id="corpo">
        <div id="tabs">
            <ul>
                <li><a href="#tabs-1">Continuar Transferência</a></li>

            </ul>
            <div id="tabs-1">
                <!--<p><a href="index.php?<?php echo md5('pagina funcionario novo'); ?>" id="dialog-link" class="ui-state-default ui-corner-all"><span class="ui-icon ui-icon-newwin"></span>Novo Funcion&aacute;rio</a></p>-->

                <?php
                if (isset($_GET['id_funcionario'])) {
                    $funcionario = new Funcionario();
                    $funcionario = Funcionario::findById($db, $_GET['id_funcionario']);

                    $departamento_func = new Departamento();
                    $departamento_func = Departamento::findById($db, $funcionario->getIddepartamento());
                }
                ?>

                <!--<div id="foto">
                    <img src="Images/semfoto.jpg" alt="Sem Foto" />
                </div><!--Fim do foto-->
                <div id="formulario">
                    <form name="form" id="form_user" action="transferir_continuar.php?id_funcionario=<?php echo $_GET['id_funcionario']; ?>" method="post" enctype="multipart/form-data">
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
                                <span>Departamento de Origem</span>
                                <input type="text" name="destinatario_origem" id="destinatario_origem" value="<?php echo $departamento_func->getDescricao(); ?>" disabled="true" />
                            </label>

                            <label>
                                <span>Departamento de Destino</span>
                                <select name="departamento_dest" id="departamento_dest" class="combos">
                                    <?php
                                    $departamento = $db->query("select * from departamento WHERE iddepartamento <>" . $funcionario->getIddepartamento());
                                    foreach ($departamento as $departamentos) {
                                        echo '<option value="' . $departamentos['iddepartamento'] . '">' . $departamentos['descricao'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </label>

                            <input type="submit" id="button" class="send" value="Transferir" name="btntransferir"/>
                            <a href="pdf_transferir.php?id_funcionario=<?php echo $_GET['id_funcionario']; ?>" target="new">Emitir Despacho</a>
                            | 
                            <a href="index.php?<?php echo md5('pagina trans'); ?>">cancelar</a>

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
