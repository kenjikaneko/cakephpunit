<?php

  require_once 'PHPUnit/Autoload.php';
  require_once('Triangle.php');

  class TriangleTest extends PHPUnit_Framework_TestCase {

    public function setUp() {
      $this->tri = new Triangle();
    }

    function testInt() {
      try {
        $this->tri->isInt(1, 1, 1);
      } catch(Exception $e) {
        $this->assertTrue(false,"整数ではありません");
      }
      $this->assertTrue(true);
    }
    function testOverZero() {
      try {
        $this->tri->isOverZero(3,3,3);
      } catch(Exception $e) {
        $this->assertTrue(false,"1以上ではありません");
      }
      $this->assertTrue(true);
    }
    function testCompareBarLength() {
      try {
        $this->tri->compareBarLength(3,3,3);
      } catch(Exception $e) {
        $this->assertTrue(false,"辺の和がおかしいです");
      }
      $this->assertTrue(true);
    }
    function testCheckShapeTriangle() {
      try{
        $this->tri->checkShapeTriangle(1,3,2);
      } catch(Exception $e) {
        echo $e->getMessage();
        $this->assertTrue(true);
      }
    }
  }
?>
