<?php

include "code.php";

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Assert;

final class classCarTest extends TestCase {

  function test_carConstructor() {
    $car = new Car(20.0, 10.0);
    $this->assertEquals(0.0, $car->readOdometer(), "A newly constructed car should have 0 miles on the odometer");
    $this->assertEquals(20.0, $car->readFuelGauge(), "A newly constructed car should have the initial gas");
  }

  function test_carDrive1() {
    $car = new Car(20.0, 10.0);
    $car->drive(15.0);
    $this->assertEquals(15.0, $car->readOdometer(), "After driving 15 miles, the odometer should read 15");
    $this->assertEquals(18.5, $car->readFuelGauge(), "After consuming 1.5 gallons of gas, the fuel gauge should read 18.5");
  }

  function test_carDrive2() {
    $car = new Car(0.0, 10.0);
    $car->drive(15.0);
    $this->assertEquals(0.0, $car->readOdometer(), "A car with no gas shouldn't drive");
    $this->assertEquals(0.0, $car->readFuelGauge(), "A car that can't drive should consume no gas");
  }

  function test_carDrive3() {
    $car = new Car(5.0, 10.0);
    $car->drive(50.0);
    $this->assertEquals(50.0, $car->readOdometer(), "After driving 50 miles, the odometer should read 50");
    $this->assertEquals(0.0, $car->readFuelGauge(), "The car should have exactly run out of gas");
  }

  function test_carDrive4() {
    $car = new Car(5.0, 10.0);
    $car->drive(150.0);
    $this->assertEquals(50.0, $car->readOdometer(), "The car should have run out of gas after 50 miles");
    $this->assertEquals(0.0, $car->readFuelGauge(), "The car should have run out of gas");
  }

  function test_carDrive5() {
    $car = new Car(20.0, 10.0);
    $car->drive(10.0);
    $car->drive(5.0);
    $this->assertEquals(15.0, $car->readOdometer(), "After driving 15 miles, the odometer should read 15");
    $this->assertEquals(18.5, $car->readFuelGauge(), "After consuming 1.5 gallons of gas, the fuel gauge should read 18.5");
  }

  function test_carAddGas() {
    $car = new Car(5.0, 10.0);
    $car->addGas(10.0);
    $this->assertEquals(15.0, $car->readFuelGauge(), "Adding 10 gallons to 5 gallons should be 15 gallons");
    $car->drive(10.0);
    $this->assertEquals(10.0, $car->readOdometer(), "The car should driven 10 miles");
    $this->assertEquals(14.0, $car->readFuelGauge(), "The car should have run out of gas");
  }
}

?>
