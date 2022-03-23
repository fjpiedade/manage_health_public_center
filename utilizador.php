<?php
session_start();
include_once 'app_config.php';
?>
<section class="featured">
    <div class="content-wrapper">
        <hgroup class="title">
            <h2>Utilizadores</h2>
        </hgroup>
    </div>
</section>
<div id="corpo">
    <div id="tabs">
        <ul>
            <li><a href="#tabs-1">Visualizar</a></li>

        </ul>
        <div id="tabs-1"><!--id="tablesorter-demo" class="tablesorter" border="1" cellpadding="0" cellspacing="1"-->
            <p><a href="index.php?<?php echo md5('pagina utilizador novo'); ?>" class="new_button">Novo Utilizador</a></p>
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="exampleOne" >
                <thead>
                    <tr>
                        <th>#</th>
                        <!--<th>ID</th>-->
                        <th>Nome</th>
                        <th>Estado</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $consulta = $db->query("SELECT utilizador.idutilizador AS id, utilizador.username AS nome, utilizador.stuto AS estado FROM utilizador");
                    $cont = 1;
                    foreach ($consulta as $key) {
                        ?>
                        <tr>
                            <td style="width: 40px;"><?php echo $cont; ?></td>
                            <!--<td style="width: 40px;"><?php echo utf8_decode($key['id']); ?></td>-->
                            <td><a href="index.php?<?php echo md5('pagina utilizador perfil'); ?>&id_user=<?php echo $key['id'];?>"><?php echo utf8_decode($key['nome']); ?></a></td>
                            <td style="width: 100px;"><?php echo utf8_decode($key['estado']); ?></td>
                            <td style="width: 120px; padding:0 10px;">
                                <a href="index.php?<?php echo md5('pagina utilizador alterar'); ?>&id_user=<?php echo $key['id'];?>">Alterar</a>
                                |
                                <a href="delete_utilizador.php?id_user=<?php echo $key['id'];?>" onclick="return confirm('Deseja Realmente Eliminar?');">Eliminar</a>
                            </td>
                        </tr>
                        <?php
                        $cont++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>