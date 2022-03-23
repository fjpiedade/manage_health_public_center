<?php
session_start();

include_once 'app_config.php';

if (isset($_SESSION['LOGIN']) && $_SESSION['LOGIN'] == true) {
    ?>
    <section class="featured">
        <div class="content-wrapper">
            <hgroup class="title">
                <h2>Departamentos</h2>
            </hgroup>
        </div>
    </section>
    <script type="text/javascript" src="js/ajax.js"></script>
    <div id="corpo">
        <?php
        require_once "app_conect.php";
        $db = testdb_connect();
        $departamento = $db->query("select d.iddepartamento,d.descricao depa,d.sigla, d.datacriacao, u.username 
from departamento d, utilizador u where d.idutilizador=u.idutilizador");
        ?>

        <div id="tabs">
            <ul>
                <li><a href="#tabs-1">Departamentos</a></li>
            </ul>
            <div id="tabs-1">
                <p><a href="#" id="dialog-link" class="ui-state-default ui-corner-all"><span class="ui-icon ui-icon-newwin"></span>Novo Departamento</a></p>
                <table cellpadding="0" cellspacing="0" border="0" class="display" id="exampleOne">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Descri&ccedil;&atilde;o</th>
                            <th>Sigla</th>
                            <th>Data Cria&ccedil;&atilde;o</th>
                            <th>Criado por</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($departamento as $departamentos) {
                            ?>
                            <tr>
                                <td><?php echo $departamentos['iddepartamento']; ?></td>
                                <td><?php echo $departamentos['depa']; ?></td>
                                <td><?php echo $departamentos['sigla']; ?></td>
                                <td><?php echo $departamentos['datacriacao']; ?></td>
                                <td><?php echo $departamentos['username']; ?></td>
                                <td style="width: 120px; padding:0 10px;">
                                    <a href="">Alterar</a>
                                    |
                                    <a href="eliminar_departamento.php?iddepartamento=<?php echo $departamentos['iddepartamento']; ?>" onclick="return confirm('Deseja Realmente Eliminar?');">Eliminar</a></td>
                                <?php
                                $i++;
                            }
                            ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="dialog" title="Novo Departamento">
        <div id="formulario">
            <form name="form" id="form" action="departamento_novo.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <label>
                        <span>Nome</span>
                        <input type="text" name="nome" value=""/>
                    </label>

                    <label>
                        <span>Sigla</span>
                        <input type="text" name="sigla" value=""/>
                    </label>

                    <label>
                        <span>Fundação</span>
                        <input type="text" name="fundacao" id="fundacao" value=""/>
                    </label>

                    <label>
                        <span>Telefone</span>
                        <input type="text" name="telefone" value=""/>
                    </label>

                    <label>
                        <span>E-mail</span>
                        <input type="text" name="email" value=""/>
                    </label>
                    <input type="submit" name="btngravar" value="Gravar" class="send" />
                </fieldset>
            </form>
        </div>
    </div>

    <?php
}
else
    header("Location: login.php");
?>