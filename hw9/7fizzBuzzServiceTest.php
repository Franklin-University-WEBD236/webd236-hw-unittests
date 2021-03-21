<?php

include "json_decode.php";
include "code.php";

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Assert;

final class fizzBuzzServiceTest extends TestCase {
  function test_getFizzBuzz() {
    $c = 1;
    $results = [];
    while($c < 6){
     $results[$c] = file_get_contents("results" . $c . ".txt");
     $c++; 
    }
    $this->assertEquals($results[1], getFizzBuzz(1,15), "The HTML output is not correct, expected: " . $results[1] . "\nBut Got:\n" . getFizzBuzz(1,15));
    $this->assertEquals($results[2], getFizzBuzz(1,30), "The HTML output is not correct, expected: " . $results[2] . "\nBut Got:\n" . getFizzBuzz(1,30));
    $this->assertEquals($results[3], getFizzBuzz(9,30), "The HTML output is not correct, expected: " . $results[3] . "\nBut Got:\n" . getFizzBuzz(9, 30));
    $this->assertEquals($results[4], getFizzBuzz(5,10), "The HTML output is not correct, expected: " . $results[4] . "\nBut Got:\n" . getFizzBuzz(5, 10));
    $this->assertEquals($results[5], getFizzBuzz(3,9), "The HTML output is not correct, expected: " . $results[5] . "\nBut Got:\n" . getFizzBuzz(3, 9));
  }
}

?>
