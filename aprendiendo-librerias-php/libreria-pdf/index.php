<?php
require_once "../vendor/autoload.php";

//Namespace que tiene todas las librerias
use Spipu\Html2Pdf\Html2Pdf;
//Instancia de un nuevo objeto
$html2pdf = new Html2Pdf();
//El html que tendra el pdf
ob_start();
require_once "plantilla.php";
$html = ob_get_clean();
//Escribimos el html en el pdf
$html2pdf->writeHTML($html);
$html2pdf->output("pdf_generator.pdf");
