<?php

$timezones = [
    'UTC',
    'Asia/Kolkata',
    'Europe/London',
    'America/New_York',
];

foreach ($timezones as $tz) {
    date_default_timezone_set($tz);
    echo $tz . ' => ' . date('Y-m-d H:i:s') . '<br>';
}
?>
