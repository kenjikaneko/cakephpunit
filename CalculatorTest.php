<?php

  require_once 'PHPUnit/Autoload.php';
  require_once('CalculatorCode.php');

  class StackTest extends PHPUnit_Framework_TestCase{

    function testPlus() {
      $calculator = new CalculatorCode();
      $plus_number = $calculator->plus();
      $this->assertEquals(8,$plus_number);
    }
    function testMinus() {
      $calculator = new CalculatorCode();
      $minus_number = $calculator->minus();
      $this->assertEquals(5,$minus_number);
    }
    function testMultiple() {
      $calculator = new CalculatorCode();
      $multiple_number = $calculator->multiple();
      $this->assertEquals(25,$multiple_number);
    }
    function testDivision() {
      $calculator = new CalculatorCode();
      $division_number = $calculator->division();
      $this->assertEquals(2,$division_number);
    }
  }

?>
