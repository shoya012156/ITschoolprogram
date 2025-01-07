<?php 
// lesson2-1
  $numA = 56;
  $numB = 56;
  if ($numA > $numB) {
    echo $numA;
  } else if($numA < $numB){
    echo $numB;
  } else {
    echo "変数Aと変数Bは等しいです。\n"; 
  }

  // lesson2-2
  $numC = 192439;
  if ($num % 2 == 0) {
    echo "偶数です";
  } else {
    echo "奇数です";
  }
  echo "\n";

  // lesson2-3
  $score = 4;
  if ($score == 100) {
    echo "AA";
  } else if ($score >= 90) {
    echo "A";
  } else if ($score >= 80) {
    echo "B";
  } else if ($score >= 70) {
    echo "C";
  } else if ($score >= 60) {
    echo "D";
  } else if ($score < 60) {
    echo "E";
  } 
  echo "\n";

  // lesson2-4
  $numD = -56;
  if ($numD < 0) {
    echo '負の数です';
  } else if ($numD == 0) {
    echo '0です';
  } else if ($numD > 0) {
    echo '正の数です';
  }
  echo "\n";

  // lesson2-5
  $age = 5;
  if ($age >= 0 && $age <= 5) {
    echo 'バスの料金は無料です';
  } else if ($age >= 6 && $age <= 12) {
    echo 'バスの料金は200円です'; 
  } else if ($age >= 13 && $age <= 70) {
    echo 'バスの料金は500円です';
  } else if ($age > 70) {
    echo 'バスの料金は無料です';
  }
    ?>
