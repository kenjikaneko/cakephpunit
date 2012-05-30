<?php
class Triangle {
  function isInt($a,$b,$c) {
    $a_int = is_int($a);
    $b_int = is_int($b);
    $c_int = is_int($c);

    if(!$a_int || !$b_int || !$c_int) {
       throw new Exception('error');
    }
  }
  function isOverZero($a,$b,$c) {
    if($a<=0) {
       throw new Exception('error');
    }
    if($b<=0) {
       throw new Exception('error');
    }
    if($c<=0){
       throw new Exception('error');
    }
  }
  function compareBarLength($a,$b,$c) {
    if($a>=($b+$c)) {
      throw new exception('error');
    }
    if($b>=($c+$a)) {
      throw new exception('error');
    }
    if($c>=($a+$b)) {
      throw new exception('error');
    }
  }
  function checkShapeTriangle($a,$b,$c) {
    if(($a==$b) && ($b==$c) && ($c==$a)) {
      throw new exception('正三角形です');
    } elseif(($a==$b) || ($b==$c) || ($c==$a)) {
      throw new exception('二等辺三角形です');
    } else {
      throw new exception('普通の三角形です');
    }
  }
}
?>
