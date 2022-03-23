<?php
session_start();
?>
<section class="featured">
    <div class="content-wrapper">
        <hgroup class="title">
            <h2>Novo Utilizador</h2>
        </hgroup>
    </div>
</section>
<div id="corpo">
    <div id="tabs">
        <ul>
            <li><a href="#tabs-1">Novo Utilizador</a></li>

        </ul>
        <div id="tabs-1">
            <!--<p><a href="index.php?<?php echo md5('pagina funcionario novo'); ?>" id="dialog-link" class="ui-state-default ui-corner-all"><span class="ui-icon ui-icon-newwin"></span>Novo Funcion&aacute;rio</a></p>-->
            <div id="foto">
                <img src="Images/semfoto.jpg" alt="Sem Foto" />
            </div><!--Fim do foto-->
            <div id="formulario">
                <form name="form" id="form_user" action="add_utilizador.php" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <label>
                            <span>Nome</span>
                            <input type="text" name="nome" id="nome" value=""/>
                        </label>

                        <label>
                            <span>Estado</span>
                            <select name="estado" id="estado" class="combos">
                                <option>Desactivo</option>
                                <option>Activo</option>
                            </select>
                        </label>

                        <label>
                            <span>Senha</span>
                            <input type="password" name="senha" id="senha" value=""/>
                        </label>

                        <label>
                            <span>Confirmação</span>
                            <input type="password" name="senha_conf" id="senha_conf" value=""/>
                        </label>

                        <input type="submit" id="button" class="send" value="Gravar" name="gravar"/>
                        <a href="index.php?<?php echo md5('pagina utilizador'); ?>">cancelar</a>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>