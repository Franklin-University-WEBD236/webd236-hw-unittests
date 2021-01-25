<?php

include "code.php";

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Assert;

final class letterTest extends TestCase {

  function test_removeDuplicates1() {
    $arr = array(
     'a' => "one",   'b' => "two",
     'c' => "three", 'd' => "two",
     'e' => "four",  'f' => "five",
     'g' => "three", 'h' => "two",
    );
    $result = removeDuplicates($arr);
    assertEquals(3, count($result));
    foreach($result as $key => $value) {
      assertTrue($value != "two", "two should not be in the values");
      assertTrue($value != "three", "three should not be in the values");
      assertEquals($arr[$key], $result[$key], "Looks like a key mismatch");
    }
  }

  function test_removeDuplicates2() {
    $arr = array(
     'a' => "one",   'b' => "two",
     'c' => "three", 'd' => "four",
     'e' => "five",  'f' => "six",
     'g' => "seven", 'h' => "eight",
    );
    $result = removeDuplicates($arr);
    assertEquals(8, count($result), "none should have been removed");
    foreach($result as $key => $value) {
      assertEquals($arr[$key], $result[$key], "Looks like a key mismatch");
    }
  }
}
