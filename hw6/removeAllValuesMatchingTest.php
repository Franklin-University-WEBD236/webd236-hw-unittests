<?php

include "code.php";

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Assert;

final class letterTest extends TestCase {

  function test_removeAllValuesMatching1() {
    $arr = array(
     'a' => "one",   'b' => "two",
     'c' => "three", 'd' => "two",
     'e' => "four",  'f' => "five",
     'g' => "three", 'h' => "two",
    );
    $result = removeAllValuesMatching($arr, "two");
    $this->assertEquals(5, count($result));
    foreach($result as $key => $value) {
      $this->assertTrue($value != "two", "two should not be in the values");
      $this->assertEquals($arr[$key], $result[$key], "Looks like a key mismatch");
    }
  }

  function test_removeAllValuesMatching2() {
    $arr = array(
     'a' => "one",   'b' => "two",
     'c' => "three", 'd' => "two",
     'e' => "four",  'f' => "five",
     'g' => "three", 'h' => "two",
    );
    $result = removeAllValuesMatching($arr, "three");
    $this->assertEquals(6, count($result));
    foreach($result as $key => $value) {
      $this->assertTrue($value != "three", "three should not be in the values");
      $this->assertEquals($arr[$key], $result[$key], "Looks like a key mismatch");
    }
  }
}
