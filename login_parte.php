<script src="js/jquery.validateLogin.js"></script>

<section class="featured">
    <div class="content-wrapper">
        <hgroup class="title">
            <h2>Bem-vindo...</h2>
        </hgroup>
    </div>
</section>

<section id="loginForm">
    <h2>Credencie seu Acesso.</h2>
    <?php
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        if ($error == 1) {
            ?>
            <div class="ui-widget">
                <div class="ui-state-error ui-corner-all" style="padding: 0 5px; width: 500px;">
                    <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: 5px;"></span>
                        <strong></strong> Informe por favor Utilizador e Senha Válida.</p>
                </div>
            </div>
            <?php
        } elseif ($error == 2) {
            ?>
            <div class="ui-widget">
                <div class="ui-state-error ui-corner-all" style="padding: 0 5px; width: 500px;">
                    <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: 5px;"></span>
                        <strong></strong> Contactar o Administrador. Conta Desactivada!</p>
                </div>
            </div>
            <?php
        }
    }
    ?>
    <form name="form_log" action="acesso.php" method="Post">
        <fieldset>
            <legend>Bem-vindo</legend>
            <ol>
                Nome de Utilizador:
                <li>
                    <input type="text" name="username" id="username" />
                </li>

                Senha de Acesso:
                <li>
                    <input type="password" name="password" id="password" />
                </li>
                <li>
                    <input type="checkbox" name="remember" value="Lembrar-me"/>
                </li>
            </ol>
            <input type="submit" id="button" value="Entrar" name="entrar"/>
        </fieldset>
        <p>
            <a href="">Se não possui uma Conta.</a>
        </p>
    </form>
</section>

<section class="social" id="socialLoginForm">
    <h2 style="font-weight:normal; font-size:22px;">Desfrute do Sistema de Gestão Pública.</h2>
    <!--@Html.Action("ExternalLoginsList", New With {.ReturnUrl = ViewData("ReturnUrl")})-->
</section>


