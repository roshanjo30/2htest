<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../Prime.php';

class PrimeTest extends TestCase
{
    public function testPrimeNumber()
    {
        $this->assertTrue(isPrime(7));
        $this->assertFalse(isPrime(8));
        $this->assertTrue(isPrime(8));
   
    }
}
