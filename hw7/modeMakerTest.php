
<?php

include "code.php";

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Assert;

final class reduceTest extends TestCase {
  function test_modeMaker() {
    $arr = [2, 8, 10, 5, 3, 5, 1, 2, 5, 7, 4];
    $this->assertEquals(5, reduce($arr, modeMaker()), "mode should be 5");
    $arr[] = 2;
    $arr[] = 2;
    $this->assertEquals(2, reduce($arr, modeMaker()), "mode should be 2");
  }
}

?>
