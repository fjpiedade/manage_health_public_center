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
        $this->Cell(0, 1, "MINISTÉRIO DA SAÚDE", 0, 1, 'C');

        $this->Ln(0);
        $this->SetFont('helvetica', 'B', 12);
        $this->Cell(0, 1, "DIRECÇÃO PROVINCIAL DE SAÚDE DE LUANADA", 0, 1, 'C');
        
        $this->Ln(5);
        $this->SetFont('helvetica', '', 12);
        $this->Cell(0, 1, "a) REPARTIÇÃO MUNICIPAL DE SAÚDE DE BELAS", 0, 1, 'C');

    }

    function Footer() {
        $this->SetY(-40);
        $this->SetFont('helvetica', 'B', 10);
        $style['position'] = 'R';
        $url='Fernando João Piedade';
        $this->write2DBarcode($url, 'QRCODE,H', '', '', 25, 25, $style, 'N', FALSE);
        //$this->write2DBarcode($url, 'QRCODE,H', '', '', 25, 25, $style, 'N', TRUE);
    }

}

$pdf = new PDF();
//$pdf->setPrintHeader(false);
//$pdf->AliasNbPages();
$pdf->AddPage();

$number_guia=100;
$pdf->Ln(50);
$pdf->SetFont('helvetica', 'BU', 14);
$pdf->Cell(0, 10, "GUIA MEDICA N°".$number_guia." /" . date('Y'), 0, 1, 'C');

$presente=$_POST['presente'];
$situacao = $_POST['situacao'];
$prescricao = $_POST['prescricao'];
$medico = $_POST['medico'];
$nomeFuncionario = $funcionario->getNome();

$departamentos = new Departamento();
$departamentos = Departamento::findById($db, $funcionario->getIddepartamento());
$localColocado = $departamentos->getDescricao();

$categorias = new Categoria();
$categorias = Categoria::findById($db, $funcionario->getIdcategoria());
$categoria = $categorias->getDescricao();

//$texto = "Pela presente, se faz constar que no dia " . $dataInicio . ", entra em gozo de " . $qtDias . " dias de licença disicplinar o(a) Sr(a). " . $nomeFuncionario . ", colocado(a) no " . $localColocado . ", com a categoria de " . $categoria . ". Considerado pelo despacho do Sr. Director de Repartição Municipal de Saúde de Belas.";
$texto1 = "Esta Licença foi concebida para gozo de férias em Angola, nos termos do Art°. 4° Do decreto-lei n° 10/94 de 12 06, e tem a sua duração até o dia " . $dataFim . ".";
$texto2 = "E, para que não haja impedimento foi passada a presente guia, que vai devidamente por mim assinada e autenticado com o carimbro a óleo em uso nesta Repartição.";

$pdf->Ln(8);
$pdf->SetFont('helvetica', '', 14);
$pdf->Write(5, 'Vai aprentar-se a ');

$pdf->SetFont('helvetica', 'B', 14);
$pdf->Write(5, $presente);

$pdf->Ln();
$pdf->SetFont('helvetica', '', 14);
$pdf->Write(5, 'Nome do beneficiário ');

$pdf->SetFont('helvetica', 'B', 14);
$pdf->Write(5, strtoupper($nomeFuncionario));

$pdf->Ln();
$pdf->SetFont('helvetica', '', 14);
$pdf->Write(5, 'Situação ');
$pdf->SetFont('helvetica', 'B', 14);
$pdf->Write(5, $situacao);

//$pdf->Ln();
//$pdf->SetFont('helvetica', '', 14);
//$pdf->SetTextColor(255, 0, 0);
//$pdf->Write(5, strtoupper($nomeFuncionario));

$pdf->Ln(10);
$pdf->SetFont('helvetica', 'B', 14);
$pdf->Write(5, 'Elementos referentes ao beneficiário:');

$pdf->Ln();
$pdf->SetFont('helvetica', '', 14);
$pdf->Write(5, 'Pai :');
$pdf->SetFont('helvetica', 'B', 14);
$pdf->Write(5, $funcionario->getNomepai());

$pdf->Ln();
$pdf->SetFont('helvetica', '', 14);
$pdf->Write(5, 'Mãe : ');
$pdf->SetFont('helvetica', 'B', 14);
$pdf->Write(5, $funcionario->getNomemae());

$pdf->Ln();
$pdf->SetFont('helvetica', '', 14);
$pdf->Write(5, 'Província: ');
$pdf->SetFont('helvetica', 'B', 14);
$pdf->Write(5, $funcionario->getProvincia());

$pdf->Ln();
$pdf->SetFont('helvetica', '', 14);
$pdf->Write(5, 'Município: ');
$pdf->SetFont('helvetica', 'B', 14);
$pdf->Write(5, $funcionario->getEndereco());

$pdf->Ln();
$pdf->SetFont('helvetica', '', 14);
$pdf->Write(5, 'Comuna: ');
$pdf->SetFont('helvetica', 'B', 14);
$pdf->Write(5, $funcionario->getEndereco());

$pdf->Ln();
$pdf->SetFont('helvetica', '', 14);
$pdf->Write(5, 'Idade: '.$funcionario->getDatanascimento().'     Estado Civil: '.$funcionario->getEstadocivil().'     Sexo: '.$funcionario->getGenero());

$pdf->Ln(15);
$pdf->SetFont('helvetica', 'B', 14);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(0, 10, "REPARTIÇÃO MUNICIPAL DE SAÚDE DE BELAS EM LUANDA, AOS " . date('d/m/Y') . ".", 0, 1, 'C');

$pdf->Ln(15);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(0, 5, "", 0, 1, 'C');
$pdf->Cell(0, 5, "O DIRECTOR DE REPARTIÇÃO", 0, 1, 'C');

$pdf->Ln();
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(0, 5, "Dr. DOMINGOS QUIALA CRISTOVÃO", 0, 1, 'C');

$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(0, 5, "MÉDICO", 0, 1, 'C');

$pdf->Ln();
$pdf->SetFont('helvetica', 'B', 14);
$pdf->Write(5, 'PRESCRIÇÃO MÉDICA:');
$pdf->Ln();
$pdf->SetFont('helvetica', '', 14);
$pdf->Write(5, $prescricao);

$pdf->Ln(15);
$pdf->SetFont('helvetica', 'B', 14);
$pdf->Write(5, 'O MÉDICO');
$pdf->Ln();
$pdf->SetFont('helvetica', 'U', 14);
$pdf->Write(5, $medico);


$pdf->Output("guia_medica.pdf", "I");
?>
