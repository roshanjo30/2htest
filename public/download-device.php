<?php

// File saved inside:
$file = __DIR__ . '/downloads/php-logo.svg';

// Check if the file exists
if (!file_exists($file)) {
    die('File not found');
}

// Send headers so the browser downloads the file
header('Content-Description: File Transfer');
header('Content-Type: image/svg+xml');
header('Content-Disposition: attachment; filename="php-logo.svg"');
header('Content-Length: ' . filesize($file));
header('Cache-Control: no-cache, must-revalidate');
header('Pragma: public');

// Output the file contents
readfile($file);
exit;
?>
