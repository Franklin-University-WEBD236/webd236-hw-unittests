<?php

include "code.php";

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Assert;

final class filterWordTest extends TestCase {
  
  function test_wordFilter1() {
    $this->assertEquals("*****", wordFilter("fudge"));
    $this->assertEquals("Oh, *****! I'm in trouble now!", wordFilter("Oh, shoot! I'm in trouble now!"));
    $this->assertEquals("**** it! I goofed again.", wordFilter("Darn it! I goofed again."));
    $this->assertEquals("Get the ***** outta here! I'm tired of all your gosh **** desserts.", wordFilter("Get the fudge outta here! I'm tired of all your gosh darn desserts."));
  }

  function test_wordFilter2() {
    $this->assertEquals("Darnel, you keep overshooting your target.", wordFilter("Darnel, you keep overshooting your target."));
    $this->assertEquals("", wordFilter(""));
  }
  
}

?>
