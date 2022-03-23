<ul class="sf-menu" id="example">
    <li class="current">
        <span class="ui-icon ui-icon-home" style="float: left; margin:13px 3px 0px 5px;"></span>
        <a href="index.php">Início</a>
    </li>
    <li>
        <span class="ui-icon ui-icon-contact" style="float: left; margin:13px 3px 0px 5px;"></span>
        <a href="#">Funcionários</a>
        <ul>
            <li><a href="index.php?<?php echo md5('pagina funcionario'); ?>">Visualizar</a></li>
            <li><a href="index.php?<?php echo md5('pagina funcionario novo'); ?>">Novo</a></li>
        </ul>
    </li>
    <li>
        <span class="ui-icon ui-icon-note" style="float: left; margin:13px 3px 0px 5px;"></span>
        <a href="#">Tarefas Correntes</a>
        <ul>
            <li><a href="index.php?<?php echo md5('pagina trans'); ?>">Transfer&ecirc;ncias</a></li>
            <li><a href="index.php?<?php echo md5('pagina note'); ?>">Notifica&ccedil;&otilde;es</a></li>
            <li><a href="index.php?<?php echo md5('pagina mapa'); ?>">Mapa de F&eacute;rias</a></li>
            <li><a href="index.php?<?php echo md5('pagina efect'); ?>">Efectividades</a></li>
            <!--<li><a href="index.php?<?php echo md5('pagina salario'); ?>">Processamento de Sal&aacute;rios</a></li>-->
        </ul>
    </li>
    <li>
        <span class="ui-icon ui-icon-document" style="float: left; margin:13px 3px 0px 5px;"></span>
        <a href="#">Guias Diversas</a>
        <ul>
            <!--<li><a href="index.php?<?php echo md5('pagina feria'); ?>">F&eacute;rias</a></li>-->
            <li><a href="index.php?<?php echo md5('pagina medi'); ?>">M&eacute;dico</a></li>
            <li><a href="index.php?<?php echo md5('pagina marcha'); ?>">Marcha</a></li>
            <li><a href="index.php?<?php echo md5('pagina guiatrans'); ?>">Transfer&ecirc;ncia</a></li>
        </ul>
    </li>
    <li>
        <span class="ui-icon ui-icon-person" style="float: left; margin:13px 3px 0px 5px;"></span>
        <a href="#">Utilizadores</a>
        <ul>
            <li><a href="index.php?<?php echo md5('pagina utilizador'); ?>">Visualizar</a></li>
            <li><a href="index.php?<?php echo md5('pagina utilizador novo'); ?>">Novo</a></li>
        </ul>
    </li>
    <li>
        <span class="ui-icon ui-icon-wrench" style="float: left; margin:13px 3px 0px 5px;"></span>
        <a href="#">Configura&ccedil;&otilde;es</a>
        <ul>
            <li><a href="index.php?<?php echo md5('pagina departamento'); ?>">Departamentos</a></li>
            <li><a href="index.php?<?php echo md5('pagina seccao'); ?>">Sec&ccedil;&otilde;es</a></li>
            <li><a href="index.php?<?php echo md5('pagina funcao'); ?>">Fun&ccedil;&otilde;es</a></li>
            <li><a href="index.php?<?php echo md5('pagina categoria'); ?>">Categorias</a></li>
        </ul>
    </li>
</ul>
