<?php
include "code.php";

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Assert;

final class CodeTest extends TestCase {

  public function testCountdownFront1() {
    $this->assertEquals('', countdownFront('Pancake', 0));
    $this->assertEquals('P', countdownFront('Pancake', 1));
  }
  public function testCountdownFront2() {
    $this->assertEquals('PaP', countdownFront('Pancake', 2));
    $this->assertEquals('PanPaP', countdownFront('Pancake', 3));
  }
  public function testCountdownFront3() {
    $this->assertEquals('PancPanPaP', countdownFront('Pancake', 4));
    $this->assertEquals('PancaPancPanPaP', countdownFront('Pancake', 5));
  }
  public function testCountdownFront4() {
    $this->assertEquals('PancakPancaPancPanPaP', countdownFront('Pancake', 6));
  }

}
?>
