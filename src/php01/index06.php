<?php

function exam($score1, $score2, $score3)
{
  $total = $score1 * $score2 / $score3;
  return $total;
}

function b1($score1, $score2)
{
  $total = $score1 * $score2;
  return $total;
}

function c1($score1, $score2,$score3,$score4)
{
  $total = ($score1 + $score2)*$score3/$score4;
  return $total;
}



$a = exam(5, 4,2);
$b = b1(4,4);
$c = c1(3,7,6,2);

echo $a . "\n";
echo $b;
echo "<br>";
echo $c;
echo "<br>";

