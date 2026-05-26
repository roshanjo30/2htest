<?php

$url = 'https://www.php.net/images/logos/php-logo.svg';
$saveDir = __DIR__ . '/downloads';

if (!is_dir($saveDir)) {
    mkdir($saveDir, 0777, true);
}

$filePath = $saveDir . '/php-logo.svg';

$fp = fopen($filePath, 'wb');

if (!$fp) {
    die('Cannot create file');
}

$ch = curl_init($url);

curl_setopt_array($ch, [
    CURLOPT_FILE => $fp,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_USERAGENT => 'PHP Downloader',
]);

curl_exec($ch);

if (curl_errno($ch)) {
    echo 'cURL Error: ' . curl_error($ch);
    curl_close($ch);
    fclose($fp);
    unlink($filePath);
    exit;
}

$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);
fclose($fp);

if ($httpCode === 200) {
    echo "Image downloaded successfully.<br>";
    echo "Saved to: $filePath";
} else {
    echo "Download failed. HTTP Code: $httpCode";
    unlink($filePath);
}
?>
