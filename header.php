<?php
session_start();

include_once 'app_config.php';

function __autoload($nome_classe) {
    require_once 'Classes/' . $nome_classe . '.class.php';
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>GSP - Gestão de Saúde Pública</title>
        <link href="Images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <meta name="viewport" content="width=device-width" />
        <link href="css/Site.css" rel="stylesheet" type="text/css" />

        <link href="css/smoothness/jquery-ui-1.10.3.custom.css" rel="stylesheet">
        <script src="js/jquery-1.9.1.js"></script>
        <script src="js/jquery-ui-1.10.3.custom.js"></script>

        <script src="js/jquery.validate.js"></script>
        <script src="js/jquery.maskedinput.js"></script>
        
        <script src="js/validationSigaPessoal.js"></script>
        
        <link href="css/stylephoto.css" rel="stylesheet" type="text/css" />
        <link href="/js/assets/fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet" type="text/css" />


        <link rel="stylesheet" href="dist/css/superfish.css" media="screen">
        <!--<style> body { max-width: 40em; } </style>-->
        <!--<script src="dist/js/jquery.js"></script>
        <script src="dist/js/hoverIntent.js"></script>
        <script src="dist/js/superfish.js"></script>-->

        <link rel="stylesheet" href="table/docs/css/jq.css" type="text/css" media="print, projection, screen" />
        <link rel="stylesheet" href="table/themes/blue/style.css" type="text/css" media="print, projection, screen" />
        <script type="text/javascript" src="table/jquery.tablesorter.js"></script>
        <script type="text/javascript" src="table/docs/css/jq.css"></script>

        <style type="text/css" title="currentStyle">
            @import "media/css/demo_page.css";
            @import "media/css/demo_table_jui.css";
            @import "css/smoothness/jquery-ui-1.10.3.custom.css";
        </style>
        <script type="text/javascript" language="javascript" src="media/js/jquery.dataTables.js"></script>
        <script type="text/javascript" charset="utf-8">
            $(document).ready(function() {
                oTable = $('#exampleOne').dataTable({
                    "bJQueryUI": true,
                    "sPaginationType": "full_numbers"
                });
            });
        </script>

        <script type="text/javascript">
            $(function() {
                $("#tablesorter-demo").tablesorter({sortList: [[0, 0], [0, 0]], widgets: ['zebra']});
                $("#options").tablesorter({sortList: [[0, 0]], headers: {3: {sorter: false}, 4: {sorter: false}}});
            });
        </script>

        <script>
            $(function() {

                $("#accordion").accordion();

                var availableTags = [
                    "ActionScript",
                    "AppleScript",
                    "Asp",
                    "BASIC",
                    "C",
                    "C++",
                    "Clojure",
                    "COBOL",
                    "ColdFusion",
                    "Erlang",
                    "Fortran",
                    "Groovy",
                    "Haskell",
                    "Java",
                    "JavaScript",
                    "Lisp",
                    "Perl",
                    "PHP",
                    "Python",
                    "Ruby",
                    "Scala",
                    "Scheme"
                ];
                $("#autocomplete").autocomplete({
                    source: availableTags
                });

                $("#button").button();
                $("#radioset").buttonset();

                $("#tabs").tabs();

                $("#dialog").dialog({
                    autoOpen: false,
                    width: 450,
                    modal: true,
                    buttons: [
                        {
                            text: "Gravar",
                            click: function() {
                                //$(this).dialog("close");    
                                $.ajax({
                                    type: "GET",
                                    url: "novodepartamento.php",
                                    dataType: "json",
                                    data: "p=" + $("#provincia-cod_pais").val() + "&nome=" + $("#provincia-nome").val(),
                                    success: function(resposta) {
                                        $("#provincia").val(resposta.nome);
                                        $("#cod_provincia").val(resposta.cod);
                                    }
                                });
                                $("#provincia-nome").val('');
                                $("#provincia-pais").val('');
                                $(this).dialog("close");

                            }
                        },
                        {
                            text: "Cancelar",
                            click: function() {
                                $(this).dialog("close");
                            }
                        }
                    ]
                });

                // Link to open the dialog
                $("#dialog-link").click(function(event) {
                    $("#dialog").dialog("open");
                    event.preventDefault();
                });

                $("#datepicker").datepicker({
                    inline: true
                });

                $("#slider").slider({
                    range: true,
                    values: [17, 67]
                });

                $("#progressbar").progressbar({
                    value: 20
                });

                // Hover states on the static widgets
                $("#dialog-link, #icons li").hover(
                        function() {
                            $(this).addClass("ui-state-hover");
                        },
                        function() {
                            $(this).removeClass("ui-state-hover");
                        }
                );
            });
        </script>
        <style>

            .demoHeaders {
                margin-top: 2em;
            }
            #dialog-link {
                padding: .4em 1em .4em 20px;
                text-decoration: none;
                position: relative;
            }
            #dialog-link span.ui-icon {
                margin: 0 5px 0 0;
                position: absolute;
                left: .2em;
                top: 50%;
                margin-top: -8px;
            }
            #icons {
                margin: 0;
                padding: 0;
            }
            #icons li {
                margin: 2px;
                position: relative;
                padding: 4px 0;
                cursor: pointer;
                float: left;
                list-style: none;
            }
            #icons span.ui-icon {
                float: left;
                margin: 0 4px;
            }
            .fakewindowcontain .ui-widget-overlay {
                position: absolute;
            }
        </style>

    </head>
    <body>
        <header>
            <div class="content-wrapper">
                <div class="float-left">
                    <p class="site-title"><a href="index.php">Gest&atilde;o de Sa&uacute;de P&uacute;blica</a></p>
                </div>
                <div class="float-right">
                    <?php
                    $utilizador = new Utilizador();
                    $utilizador = unserialize($_SESSION['user']);
                    ?>
                    <section id="login">
                        <ul>
                            <!--<li><a href="index.php?<?php echo md5('pagina informacao'); ?>">Informa&ccedil;&otilde;es</a></li>-->
                            <?php if (isset($_SESSION['LOGIN']) && $_SESSION['LOGIN'] == true) {
                                ?>
                                <li><a href="index.php?<?php echo md5('pagina utilizador perfil'); ?>">Ver Perfil [<strong><?php echo strtoupper($utilizador->getUsername()); ?></strong>]</a></li>
                                <li><a href="sair.php">Sair da Aplica&ccedil;&atilde;o</a></li>
                            <?php } else {
                                ?>
                                <!--<li><a href="index.php?<?php echo md5('pagina informacao'); ?>">Informa&ccedil;&otilde;es</a></li>-->
                                <?php
                            }
                            ?>
                        </ul>
                    </section>
