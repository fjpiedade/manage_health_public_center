<?php
session_start();
function __autoload($nome_class) {
    require_once 'Classes/' . $nome_class . '.class.php';
}
// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {

	//Page header
	public function Header() {

            $inst = new Instituicao();
            $inst = unserialize($_SESSION['instituicao']);
		// Logo
		$image_file = K_PATH_IMAGES2.$inst->getLogotipo();


                $html='<img src="'.$image_file.'" width="50px" height="60px"/>';


		//$this->Image($image_file, 10, 10, 15, '', '', '', 'L', false, 300, 'L', false, false, 0, false, false, false);
                //$this->writeHTMLCell($w, $h, $x, $y,'<table><tr><td>sergio kissoca</td>/tr></table>', $border=1);

                $this->MultiCell(132, 10,$this->writeHTMLCell(10, $h, $x, $y,$html, $border=1), 0, 'L', 0, 0, '', '', true);
			$this->SetFont('helvetica', '');
			$this->MultiCell(48, $h,  utf8_encode($estudante->nome_completo), 1, 'L', 0, 0, '', '', true);



		// Set font
		$this->SetFont('helvetica', 'B', 10);
		// Title
                $this->SetY(30);
		$this->Cell(0, 10, 'REPÚBLICA DE ANGOLA', 0, false, 'C', 0, '', 0, false, 'M', 'M');
                $this->Ln(4);
                $this->Cell(0, 10, 'UNIVERSIDADE AGOSTINHO NETO', 0, false, 'C', 0, '', 0, false, 'M', 'M');
                $this->Ln(4);
                $this->Cell(0, 10,$inst->getNome(), 0, false, 'C', 0, '', 0, false, 'M', 'M');
	}

	// Page footer
	public function Footer() {
		// Position at 15 mm from bottom
		$this->SetY(-15);
		// Set font
		$this->SetFont('helvetica', 'I', 8);
		// Page number
                //
		$this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'R', 0, '', 0, false, 'T', 'M');
	}
}
