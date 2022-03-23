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
                <!--<p><a href="index.php?<?php echo md5('pagina funcionario novo'); ?>">Novo Funcion&aacute;rio</a></p>-->
                <?php
                require_once "app_conect.php";
                $db = testdb_connect();
                $funcionario = $db->query("select f.idfuncionario, f.nome, f.datanascimento, f.telefone, 
                f.email, c.descricao cat, d.descricao depa 
                from funcionario f, categoria c, departamento d 
                where f.idcategoria=c.idcategoria and f.iddepartamento=d.iddepartamento");
                /*
                 * idfuncionario,nome,nomepai,nomemae,genero,provincia,datanascimento,
                 * estadocivil,idcategoria,
                 * iddepartamento,idutilizador,telefone,endereco,email,foto,bi,banco,conta,iban
                 */
                ?>
                <form name="form" id="form_user" action="efectividade_funcionarios_gravar.php?idefectividade=<?php echo $_GET['idefectividade']; ?>" method="post" enctype="multipart/form-data">
                    <?php
                    if (isset($_GET['idefectividade'])) {
                        $efectividade = new Efectividade();
                        $efectividade = Efectividade::findById($db, $_GET['idefectividade']);
                    } else {
                        echo 'empty';
                    }
                    switch ($efectividade->getMes()) {
                        case 'Janeiro':
                            $mes = 1;
                            break;
                        case 'Fevereiro':
                            $mes = 2;
                            break;
                        case 'Março':
                            $mes = 3;
                            break;
                        case 'Abril':
                            $mes = 4;
                            break;
                        case 'Maio':
                            $mes = 5;
                            break;
                        case 'Junho':
                            $mes = 6;
                            break;
                        case 'Julho':
                            $mes = 7;
                            break;
                        case 'Agosto':
                            $mes = 8;
                            break;
                        case 'Setembro':
                            $mes = 9;
                            break;
                        case 'Outubro':
                            $mes = 10;
                            break;
                        case 'Novembro':
                            $mes = 11;
                            break;
                        case 'Dezembro':
                            $mes = 12;
                            break;
                        default:
                            break;
                    }
                    ?>
                    <label>
                        <span>Mês de <?php echo $efectividade->getMes(); ?> de <?php echo $efectividade->getAno(); ?></span>
                    </label>
                    <br />
                    <table cellpadding="0" cellspacing="0" border="0" class="display" id="exampleOne">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Departamento</th>
                                <th>Categoria</th>
                                <th>Dias de Trabalho</th>
                                <th>Horas de Trabalho</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            error_reporting(E_ALL ^ E_NOTICE);
                            require_once './php-excel-reader-master/excel_reader2.php';
                            $data = new Spreadsheet_Excel_Reader("uploads/efectividades/" . $efectividade->getFicheiro());

                            $i = 1;
                            foreach ($funcionario as $funcionarios) {
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $funcionarios['idfuncionario']; ?></td>
                                    <td><?php echo strtoupper($funcionarios['nome']); ?></td>
                                    <td><?php echo $funcionarios['depa']; ?></td>
                                    <td><?php echo $funcionarios['cat']; ?></td>
                                    <td style="width: 120px; padding:0 10px;" align="center"> 
                                        <!--<a href="index.php?<?php echo md5('pagina transferir'); ?>&id_funcionario=<?php echo $funcionarios['idfuncionario']; ?>" title="Emitir uma guia de Férias">Transferir</a>-->
                                        <?php
                                        $count_dia = 0;
                                        for ($j = 1; $j <= $data->rowcount($sheet_index = 0); $j++) {
                                            if ((int) substr($data->val($j, 5), -4) == (int) $efectividade->getAno()) {
                                                if ((int) substr(substr($data->val($j, 5), 0, 5), -2) == (int) $mes) {
                                                    if ((int) $data->val($j, 1) == (int) $funcionarios['idfuncionario']) {
                                                        $count_dia++;
                                                    }
                                                }
                                            }
                                        }
                                        ?>
                                        <input type="text" name="dias" id="dias" style=" width: 30px; text-align: center;" value="<?php echo $count_dia; ?>" />
                                    </td>
                                    <td style="width: 120px; padding:0 10px;" align="center"> 
                                        <!--<a href="index.php?<?php echo md5('pagina transferir'); ?>&id_funcionario=<?php echo $funcionarios['idfuncionario']; ?>" title="Emitir uma guia de Férias">Transferir</a>-->
                                        <?php
                                        $horas_final = 0;
                                        for ($t = 1; $t <= $data->rowcount($sheet_index = 0); $t++) {
                                            //$m=substr($data->val($t, 5), 0, 5);
                                            //echo $m;
                                            //echo (int) substr(substr($data->val($t, 5), 0, 5), -2);
                                            //echo (int) substr($data->val($t, 5), -4);
                                            //echo (int) $mes;
                                            //echo (int) $efectividade->getAno();
                                            if ((int) substr($data->val($t, 5), -4) == (int) $efectividade->getAno()) {
                                                if ((int) substr(substr($data->val($t, 5), 0, 5), -2) == (int) $mes) {
                                                    if ((int) $data->val($t, 1) == (int) $funcionarios['idfuncionario']) {
                                                        $horas_inicio = (int) substr($data->val($t, 3), 0, 2);
                                                        $minutos_inicio = (int) substr($data->val($t, 3), -2);

                                                        $horas_fim = (int) substr($data->val($t, 4), 0, 2);
                                                        $minutos_fim = (int) substr($data->val($t, 4), -2);

                                                        $horas_final = $horas_final + ($horas_fim - $horas_inicio);

                                                        if ($minutos_inicio <= $minutos_fim) {
                                                            $horas_final = $horas_final + 1;
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                        ?>
                                        <input type="text" name="horas" id="horas" style=" width: 30px; text-align: center;" value="<?php echo $horas_final; ?>"/>
                                    </td>
                                    <td style="width: 20px; padding:0 10px;"> 
                                        <input type="checkbox" name="check" id="check" style=" width: 30px;"/>
                                    </td>
                                    <?php
                                    $i++;
                                }
                                ?>
                            </tr>
                        </tbody>
                    </table>
                    <input type="submit" id="button" class="send" value="Processar" name="btnprocessar"/>
                </form>
            </div>
        </div>
    </div>
    <?php
}
else
    header("Location: login.php");
?>