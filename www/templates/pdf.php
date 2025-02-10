<?php

// composer require spipu/html2pdf

require 'vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

try {
    // Crear instancia de HTML2PDF
    $html2pdf = new Html2Pdf('P', 'A4', 'es');
    
    // Contenido en HTML
    $html = '<h1>Hola, mundo</h1><p>Este es un PDF generado con HTML2PDF.</p>';
    
    // Cargar el HTML
    $html2pdf->writeHTML($html);
    
    // Mostrar el PDF en el navegador
    $html2pdf->output('archivo.pdf');
} catch (Exception $e) {
    echo 'Error al generar PDF: ' . $e->getMessage();
}
