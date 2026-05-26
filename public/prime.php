<?php

function isPrime($number)
{
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i < $number; $i++) {

        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

// Store all prime numbers
$primes = [];

// Find primes from 1 to 1000
for ($i = 1; $i <= 1000; $i++) {

    if (isPrime($i)) {
        $primes[] = $i;
    }
}

// Pagination size
$pageSize = 10;

// Split array into pages
$pages = array_chunk($primes, $pageSize);

// Display pages
foreach ($pages as $pageNumber => $page) {

    echo "Page " . ($pageNumber + 1) . "\n";

    foreach ($page as $prime) {
        echo $prime . " ";
    }

    echo "\n\n";
}

?>
