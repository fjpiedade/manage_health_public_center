<?php
session_start();
?>
<section class="featured">
    <div class="content-wrapper">
        <hgroup class="title">
            <h2>Perfil de Utilizador</h2>
        </hgroup>
    </div>
</section>
<div id="corpo">
    <div id="tabs">
        <ul>
            <li><a href="#tabs-1">Dados Pessoais</a></li>
            <li><a href="#tabs-2">Dados de Segurança</a></li>
            <li><a href="#tabs-3">Dados Extras</a></li>
        </ul>
        <div id="tabs-1">
            <!--<p><a href="index.php?<?php echo md5('pagina funcionario novo'); ?>" id="dialog-link" class="ui-state-default ui-corner-all"><span class="ui-icon ui-icon-newwin"></span>Novo Funcion&aacute;rio</a></p>-->
            <div class="demo_jui">
                <table cellpadding="0" cellspacing="0" border="0" class="display" id="exampleOne">
                    <thead>
                        <tr>
                            <th>Rendering engine</th>
                            <th>Browser</th>
                            <th>Platform(s)</th>
                            <th>Engine version</th>
                            <th>CSS grade</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Netscape Browser 8</td>
                            <td>Win 98SE+</td>
                            <td class="center">1.7</td>
                            <td class="center">A</td>
                            <td class="center"><a href="#">Alterar</a> | <a href="">Eliminar</a></td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Netscape Navigator 9</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td class="center">1.8</td>
                            <td class="center">A</td>
                            <td class="center"><a href="#">Alterar</a> | <a href="">Eliminar</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div id="tabs-2">
            <!--<p><a href="index.php?<?php echo md5('pagina funcionario novo'); ?>" id="dialog-link" class="ui-state-default ui-corner-all"><span class="ui-icon ui-icon-newwin"></span>Novo Funcion&aacute;rio</a></p>-->
        </div>
        <div id="tabs-3">
            <!--<p><a href="index.php?<?php echo md5('pagina funcionario novo'); ?>" id="dialog-link" class="ui-state-default ui-corner-all"><span class="ui-icon ui-icon-newwin"></span>Novo Funcion&aacute;rio</a></p>-->
        </div>
    </div>
</div>