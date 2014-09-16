<?php
// Include the main TCPDF library (search for installation path).
require_once('lib/tcpdf/tcpdf.php');

require_once 'utils.php';
require_once 'database.php';
$db = new DB;
$infos = $db->loadInfos(1);


//customizing the footer/header
class MYPDF extends TCPDF {
	//Page header
    public function Header() {
    	global $infos;
        // Logo
        $image_file = (string) $infos['logo_url'];
        $this->Image('@' . Utils::getImageRaw($image_file), 10, 10, 50, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        // Set font
        $this->SetFont('helvetica', 'B', 20);
        // Title
        //$this->Cell(0, 15, '<< TCPDF Example 003 >>', 0, false, 'C', 0, '', 0, false, 'M', 'M');
    }
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        //$this->Cell(0, 10, $this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'R', 0, '', 0, false, 'T', 'M');
        $this->Cell(0, 10, $this->getAliasNumPage(), 0, false, 'R', 0, '', 0, false, 'T', 'M');
    }
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 002');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// remove default header/footer
$pdf->setPrintHeader(false);
//$pdf->setPrintFooter(false);

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
//$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetMargins(20, PDF_MARGIN_TOP, 20);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lib/tcpdf/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lib/tcpdf/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
// $pdf->SetFont('times', 'BI', 20);
$pdf->SetFont('dejavusans', '', 14);

// add a page
$pdf->AddPage();

// set some text to print
$html = '
<div style="text-align: center;">
	<img src="' . $infos['logo_url'] . '" style="width: 300px;" />
	<br /><br /><br /><br />
	<div>
		<h1>Plano Diretor de Tecnologia da Informação da Prefeitura Municipal de ' . $infos['instituicao_nome'] . '</h1>
	</div>
	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
	<h4>LONDRINA - PR<br />2014</h4>
</div>
';

$pdf->writeHTML($html,  true, false, true, false, '');
$pdf->lastPage();

//------------------------

// add a page
$pdf->AddPage();

// set some text to print
$html = '
<div style="text-align: center;">
	<img src="' . $infos['logo_url'] . '" style="width: 300px;" />
	<br /><br /><br /><br />
	<div>
		<h1>Plano Diretor de Tecnologia da Informação da Prefeitura Municipal de ' . $infos['instituicao_nome'] . '</h1>
	</div>
	<br/><p>&nbsp;</p>
	<table width="100%">
		<tr>
			<td width="35%"></td>
			<td width="65%">
				<div style="text-align: left; font-size: 12pt; font-weight: bold;">
					<u>Equipe Técnica:</u><br/>
					Prof. Dr. Bruno Bogaz Zarpelão<br/>
					Prof. Dr. Rodolfo Miranda de Barros<br/>
				</div>
			</td>
		</tr>
		<tr>
			<td width="35%"></td>
			<td width="65%">
				<div style="text-align: left; font-size: 12pt; font-weight: bold;">
					<u>Equipe Administrativa:</u><br/>
					Graça Maria Simões Luz – Diretora Presidente<br />
					Mário Luís Orsi – Diretor Vice-Presidente<br />
					Rita de Cássia Rocha – Gerente Executiva<br />
					Mariele Cestari – Assessora de Projetos<br />
				</div>
			</td>
		</tr>
	</table>
	<p>&nbsp;</p>
	<h4>LONDRINA - PR<br />2014</h4>
	
</div>
';

$pdf->writeHTML($html, true, false, true, false, '');

/*$html = <<<EOD
<div>
	<u>Equipe Técnica:</u><br/>
	Prof. Dr. Bruno Bogaz Zarpelão<br/>
	Prof. Dr. Rodolfo Miranda de Barros<br/>
</div>
EOD;

$pdf->SetFillColor(255,255,0);
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, 'C', true);*/
$pdf->lastPage();



// RELATÓRIO



$pdf->setPrintHeader(true);

//---------------------------

// add a page
$pdf->AddPage();

// set some text to print
$html = '
<div style="text-align: justify;">
  <h3>1 Introdução</h3>
	<h3>1.1 Descrição sucinta do Município</h3>
	' . $infos['descricao'] . '
	<br/>
  <h3>1.2 Estrutura Organizacional da Secretaria de Tecnologia da Informação</h3>
	' . $infos['organizacional'] . '
	<br/>
  <h3>1.3 Metodologia de Trabalho</h3>
	' . $infos['metodologia'] . '
	<br/>


	<h3>2 Referencial Estratégico de TI</h3>
	<h3>2.1 Missão</h3>
	' . $infos['missao'] . '
	<br/>
	<h3>2.2 Visão</h3>
	' . $infos['visao'] . '
	<br/>
	<h3>2.3 Objetivos Estratégicos de TIC</h3>
	' . $infos['objetivos'] . '
	<br/>
	<h3>2.4 Matriz SWOT da área de TIC</h3>
		<table border="1" style="border: 2px solid black;" cellpadding="2" cellspacing="2">
			<tr style="background-color: #ccc; font-weight: bold;">
				<td>Pontos Fortes</td>
				<td>Pontos Fracos</td>
			</tr>
			<tr>
				<td>' . $infos['swot_pforte'] . '</td>
				<td>' . $infos['swot_pfraco'] . '</td>
			</tr>
			<tr style="background-color: #ccc; font-weight: bold;">
				<td>Oportunidades</td>
				<td>Ameaças</td>
			</tr>
			<tr>
				<td>' . $infos['swot_oportunidades'] . '</td>
				<td>' . $infos['swot_ameacas'] . '</td>
			</tr>
		</table>
	<br/>
</div>
';

$pdf->writeHTML($html,  true, false, true, false, '');
$pdf->lastPage();


// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_002.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+