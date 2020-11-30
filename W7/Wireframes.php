<?php 

$file = 'Wireframe.pdf';
$filename = 'Wireframe.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');
@readfile($file);

?>