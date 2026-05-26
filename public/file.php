<?php
// public/view.php

$file = __DIR__ . '/downloads/php-logo.svg';

// Check that the file exists
if (!file_exists($file)) {
    http_response_code(404);
    exit('File not found');
}

// URL that the browser can use to display the image
$imageUrl = 'downloads/php-logo.svg';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View and Download Image</title>
</head>
<body>

    <h1>View and Download Image</h1>

    <!-- Show the image -->
    <img
        src="<?php echo $imageUrl; ?>"
        alt="PHP Logo"
        width="300"
    >

    <br><br>

    <!-- Download button -->
    <a href="download-device.php">
        <button type="button">Download Image</button>
    </a>

</body>
</html>
