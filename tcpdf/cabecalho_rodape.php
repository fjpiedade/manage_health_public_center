<?php
session_start();

// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {

	//Page header
	public function Header() {

            $inst = new Instituicao();
            $inst = unserialize($_SESSION['instituicao']);
		// Logo
		$image_file = K_PATH_IMAGES2.$inst->getLogotipo();
		$this->Image($image_file, 10, 10, 15, '', '', '', 'C', false, 300, 'C', false, false, 0, false, false, false);


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


?>
