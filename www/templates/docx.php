
<?php
// Composer => composer require phpoffice/phpword
// Make an Docx file and write handlebars into {fullname} {email} ... etc.
require 'vendor/autoload.php';

use PhpOffice\PhpWord\TemplateProcessor;

// Cargar la plantilla
$template = new TemplateProcessor('template.docx');

// Rellenar la plantilla con datos dinámicos
$template->setValue('nombre', 'Juan');
$template->setValue('apellido', 'Pérez');
$template->setValue('fecha', date('d/m/Y'));

// Guardar el nuevo documento
$outputFile = 'documento_final.docx';
$template->saveAs($outputFile);

echo "Documento generado: <a href='$outputFile'>Descargar</a>";
