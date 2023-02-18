<?php
$file = $_GET["file"] .".pdf";
// To Output a PDF file
header('Content-Type: application/pdf');
header("Content-Type: application/octet-stream");
header("Content-Length: " . filesize("Delft.pdf"));
// PDF will be called Delft.pdf
header('Content-Disposition: attachment; filename="Sale.pdf"');
$imagpdf = file_put_contents($image, file_get_contents($file));
echo $imagepdf;
?>