<?php
//SHOW A DATABASE ON A PDF FILE
//CREATED BY: Carlos Vasquez S.
//E-MAIL: cvasquez@cvs.cl
//CVS TECNOLOGIA E INNOVACION
//SANTIAGO, CHILE

require_once('../../../lib/tcpdf/tcpdf.php');

//Connect to your database
include("../../../koneksi.php");

//Select the Products you want to show in your PDF file
//============================================================+
// File name   : example_001.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 001 for TCPDF class
//               Default Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Default Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('Teknisi dan Jasa APPS');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 048', PDF_HEADER_STRING);

// set header and footer fonts
// $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
// $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', 'B', 20);

// add a page
$pdf->AddPage();

$pdf->Write(0, 'Data Teknisi', '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('helvetica', '', 8);

// -----------------------------------------------------------------------------
$html = '<table width="600px" border="1px">
        <tr>
            <th><b>Id Teknisi</b></th>
            <th><b>Nama Teknisi</b></th>
            <th><b>Alamat</b></th>
            <th><b>No Telpon</b></th>
            <th><b>Kategori</b></th>
        </tr>
';

//data iteration
$rer = mysqli_query($koneksi,"SELECT * FROM teknisi");

while($rr=mysqli_fetch_array($rer))
{
    $id=$rr['id_teknisi'];
    $nama_teknisi=$rr['nama_teknisi'];
    $alamat=$rr['alamat'];
    $no_telp=$rr['no_telfon'];
    $id_kategori=$rr['id_kategori'];
    // concatenate a string, instead of calling $pdf->writeHTML()
    $html .= '<tr><td>'.$id.'</td>';
    $html .= '<td>'.$nama_teknisi.'</td>';
    $html .= '<td>'.$alamat.'</td>';
    $html .= '<td>'.$no_telp.'</td>';
    $html .= '<td>'.$id_kategori.'</td></tr>';
}

$html .= '</table>';
$pdf->writeHTML($html);

$pdf->Output('Data Teknisi.pdf', 'I');
?>