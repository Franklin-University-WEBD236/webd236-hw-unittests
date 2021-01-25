<?php
include "code.php";

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Assert;

final class CodeTest extends TestCase {
  public function testMyReverse1() {
    $this->assertEquals("olleh", myReverse("hello"), "myReverse('hello') should be 'olleh'");
  }
  public function testMyReverse2() {
    $this->assertEquals("toot", myReverse("toot"), "myReverse('toot') should be 'toot'");
  }
  public function testMyReverse3() {
    $str = "Hello there my friend";
    $this->assertEquals(strrev($str), myReverse($str), "myReverse('" . $str . "') should be '" . strrev($str) . "'");
  }
  public function testMyReverse4() {
    $str = "this is Another Test";
    $this->assertEquals(strrev($str), myReverse($str), "myReverse('" . $str . "') should be '" . strrev($str) . "'");
  }
}
