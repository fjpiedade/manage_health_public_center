<?php

session_start();
require_once('tcpdf/config/lang/eng.php');
require_once('tcpdf/tcpdf.php');
require_once 'app_config.php';

if (isset($_GET['id_funcionario'])) {
    $funcionario = new Funcionario();
    $funcionario = Funcionario::findById($db, $_GET['id_funcionario']);
}

class PDF extends TCPDF {

    function Header() {
        $this->Image('tcpdf/images/imgone.jpg' . '', 96, 8, 17, 20);

        $this->Ln(28);
        $this->SetFont('helvetica', 'B', 12);
        $this->Cell(0, 4, "REPÚBLICA DE ANGOLA", 0, 1, 'C');

        $this->Ln(0);
        $this->SetFont('helvetica', 'B', 12);
        $this->Cell(0, 1, "GOVERNO DA PROVÍNCIA DE LUANDA", 0, 1, 'C');

        $this->Ln(0);
        $this->SetFont('helvetica', 'B', 12);
        $this->Cell(0, 1, "ADMINISTRAÇÃO MUNICIPAL DE BELAS", 0, 1, 'C');

        $this->Ln(0);
        $this->SetFont('helvetica', 'B', 12);
        $this->Cell(0, 1, "REPARTIÇÃO MUNICIPAL DE SAÚDE", 0, 1, 'C');
    }

    function Footer() {
        //$dados_footer = new declaracao();
        //$footer = $dados_footer->dados_faculdade_footer();
        //posicionamento a -15 do eixo y
        $this->SetY(-40);
        //definir a fonte a itálico
        $this->SetFont('helvetica', 'B', 10);
        //expressões do footer 
        // $this->Cell(0, 5, utf8_decode('' . $footer->nome . ' - ' . $footer->universidade . ' . ' . $footer->endereco . '. '), 0, 1, 'C');
        //$this->Cell(0, 5, utf8_decode('Telefones nºs. ' . $footer->telefone . ' . Fax ' . $footer->fax . ''), 0, 1, 'C');
        $style['position'] = 'R';
        //$this->write1DBarcode('LEFT', 'C128', '', '', '', 3, 0.4, $style, 'N');
        $url='Fernando João Piedade';
        //$this->write2DBarcode('Fernando João Piedade', 'QRCODE', 'Q');
        $this->write2DBarcode($url, 'QRCODE,H', '', '', 25, 25, $style, 'N', FALSE);
        //$this->write2DBarcode($url, 'QRCODE,H', '', '', 25, 25, $style, 'N', TRUE);
    }

}

$pdf = new PDF();
//$pdf->setPrintHeader(false);
//$pdf->AliasNbPages();
$pdf->AddPage();

$number_guia = 100;

$pdf->Ln(45);
$pdf->SetFont('helvetica', 'B', 14);
$pdf->Cell(0, 10, "A:", 0, 1, 'L');

$destino = $_POST['departamento_dest'];
$pdf->Ln(0);
$pdf->SetFont('helvetica', 'B', 14);
$pdf->MultiCell(70, 0, ''.$destino, 0, 'L');

$pdf->Ln(5);
$pdf->SetFont('helvetica', 'BU', 14);
$pdf->Cell(0, 10, "LUANDA", 0, 1, 'L');

$pdf->Ln(10);
$pdf->SetFont('helvetica', 'BU', 14);
$pdf->Cell(0, 10, "ASSUNTO: NOTA N°" . $number_guia . " RH/RMSF/" . date('Y'), 0, 1, 'L');

$pdf->Ln(5);
$pdf->SetFont('helvetica', 'BU', 14);
$pdf->Cell(0, 10, "GUIA DE TRANSFERENCIA DE DEPARTAMENTO", 0, 1, 'L');

$nomeFuncionario = $funcionario->getNome();

$categorias = new Categoria();
$categorias = Categoria::findById($db, $funcionario->getIdcategoria());
$categoria = $categorias->getDescricao();

$pdf->Ln(8);
$pdf->SetFont('helvetica', 'B', 14);
$pdf->Write(5, 'Os Nossos Respeitosos Cumprimentos');

$pdf->Ln(15);
$pdf->SetFont('helvetica', '', 14);
$pdf->Write(5, ' Por intermédio desta, a Repartição Municipal da Saúde Belas, informa a Instituição acima citada, que há vaga para se efectuar a Transfência do(a) Funcionário(a) Sr(a). ' . strtoupper(' '));

$pdf->SetFont('helvetica', '', 14);
$pdf->SetTextColor(255, 0, 0);
$pdf->Write(5, strtoupper($nomeFuncionario));

$pdf->SetFont('helvetica', '', 14);
$pdf->SetTextColor(0, 0, 0);
$pdf->Write(5, ', com a categoria de ' . $categoria . ', para esta Repartição de Saúde a pedido da mesma.');

$texto2 = "Sem mais outro assunto de momento queiram aceitar as nossas elevadas considerações e estima.";
$pdf->Ln(10);
$pdf->SetFont('helvetica', '', 14);
$pdf->MultiCell(0, 0, $texto2, 0, 'L');

$pdf->Ln(15);
$pdf->SetFont('helvetica', 'B', 14);
$pdf->Cell(0, 10, '"JUNTOS PARA O DESENVOLVIMENTO"', 0, 1, 'C');

$pdf->Ln(10);
$pdf->SetFont('helvetica', 'B', 14);
$pdf->Cell(0, 10, "REPARTIÇÃO MUNICIPAL DE SAÚDE DE BELAS EM LUANDA, AOS " . date('d/m/Y') . ".", 0, 1, 'C');

$pdf->Ln(10);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(0, 5, "", 0, 1, 'C');
$pdf->Cell(0, 5, "O DIRECTOR DE REPARTIÇÃO", 0, 1, 'C');

$pdf->Ln();
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(0, 5, "Dr. DOMINGOS QUIALA CRISTOVÃO", 0, 1, 'C');

$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(0, 5, "MÉDICO", 0, 1, 'C');

$pdf->Output("guia_ferias_" . $number_guia . ".pdf", "I");
?>
