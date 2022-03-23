<?php
session_start();

include_once 'app_config.php';

if (isset($_SESSION['LOGIN']) && $_SESSION['LOGIN'] == true) {
    ?>

    <?php include_once 'header.php'; ?>
    <nav class="largura">
        <?php include_once 'menu.php'; ?>
    </nav>
    </div>
    </div>
    </header>
    <div id="body">
        <section class="content-wrapper main-content clear-fix">
            <?php
            $pagina = 0;
            if (isset($_GET[md5('pagina funcionario')])) {
                $pagina = 1;
                include_once 'funcionario.php';
            }

            if (isset($_GET[md5('pagina funcionario novo')])) {
                $pagina = 1;
                include_once 'funcionario_novo.php';
            }

            if (isset($_GET[md5('pagina utilizador')])) {
                $pagina = 1;
                include_once 'utilizador.php';
            }

            if (isset($_GET[md5('pagina utilizador novo')])) {
                $pagina = 1;
                include_once 'utilizador_novo.php';
            }

            if (isset($_GET[md5('pagina departamento')])) {
                $pagina = 1;
                include_once 'departamento.php';
            }

            if (isset($_GET[md5('pagina seccao')])) {
                $pagina = 1;
                include_once 'seccao.php';
            }
            if (isset($_GET[md5('pagina funcao')])) {
                $pagina = 1;
                include_once 'funcao.php';
            }
            if (isset($_GET[md5('pagina categoria')])) {
                $pagina = 1;
                include_once 'categoria.php';
            }
            if (isset($_GET[md5('pagina perfil funcionario')])) {
                $pagina = 1;
                include_once 'funcionario_perfil.php';
            }


            if (isset($_GET[md5('pagina utilizador perfil')])) {
                $pagina = 1;
                include_once 'utilizador_perfil.php';
            }
            if (isset($_GET[md5('pagina utilizador alterar')])) {
                $pagina = 1;
                include_once 'utilizador_alterar.php';
            }
            
            if (isset($_GET[md5('pagina trans')])) {
                $pagina = 1;
                include_once 'tranferencia.php';
            }
            
            if (isset($_GET[md5('pagina transferir')])) {
                $pagina = 1;
                include_once 'transferir.php';
            }
            
            if (isset($_GET[md5('pagina note')])) {
                $pagina = 1;
                include_once 'notificacoes.php';
            }
            if (isset($_GET[md5('pagina notificar')])) {
                $pagina = 1;
                include_once 'notificar.php';
            }
            
            if (isset($_GET[md5('pagina mapa')])) {
                $pagina = 1;
                include_once 'mapa_ferias.php';
            }
            if (isset($_GET[md5('pagina efect')])) {
                $pagina = 1;
                include_once 'efectividade.php';
            }
            if (isset($_GET[md5('pagina efect ver')])) {
                $pagina = 1;
                include_once 'efectividade_funcionarios.php';
            }
            if (isset($_GET[md5('pagina efect imprimir')])) {
                $pagina = 1;
                include_once 'efectividade_funcionarios_imprimir.php';
            }
                        
            if (isset($_GET[md5('pagina feria')])) {
                $pagina = 1;
                include_once 'guia_ferias.php';
            }    
            
            if (isset($_GET[md5('pagina feria add')])) {
                $pagina = 1;
                include_once 'mapa_ferias_add.php';
            }
            
            if (isset($_GET[md5('pagina medi')])) {
                $pagina = 1;
                include_once 'guia_medica.php';
            }
            if (isset($_GET[md5('pagina guiatrans')])) {
                $pagina = 1;
                include_once 'guia_tranferencia.php';
            }
            if (isset($_GET[md5('pagina marcha')])) {
                $pagina = 1;
                include_once 'guia_marcha.php';
            }
            
            
            if (isset($_GET[md5('pagina salario')])) {
                $pagina = 1;
                include_once 'processamento_salario.php';
            }
            
            if (isset($_GET[md5('pagina emitir feria')])) {
                $pagina = 1;
                include_once 'emitir_guia_ferias.php';
            }
            
            if (isset($_GET[md5('pagina emitir medica')])) {
                $pagina = 1;
                include_once 'emitir_guia_medica.php';
            }
            
            if (isset($_GET[md5('pagina emitir transf')])) {
                $pagina = 1;
                include_once 'emitir_guia_transferencia.php';
            }
            
            if (isset($_GET[md5('pagina emitir marcha')])) {
                $pagina = 1;
                include_once 'emitir_guia_marcha.php';
            }
            
            if ($pagina == 0) {
                include_once 'inicio.php';
            }
            ?>
        </section>
    </div>
    <?php
}
else
    header("Location: login.php");
?>
<?php include_once 'footer.php'; ?>