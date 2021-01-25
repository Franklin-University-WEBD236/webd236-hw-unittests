<?php
include "code.php";

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Assert;

final class CodeTest extends TestCase {

  public function testLongestRun1() {
    $this->assertEquals(1, longestRun('abcde'));
  }
  public function testLongestRun2() {
    $this->assertEquals(2, longestRun('abbcdde'));
  }
  public function testLongestRun3() {
    $this->assertEquals(3, longestRun('abbbcddefffghijjklmm'));
  }
  public function testLongestRun4() {
    $this->assertEquals(5, longestRun('abbbcddeffffghijjjjjklmmm'));
  }

}
