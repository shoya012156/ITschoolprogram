<?php
// lesson4-1
  for ($i = 1; $i <= 100; $i++) {
    if ($i % 10 == 0) {
      echo $i."\n";
    }
  }

// lesson4-2
  $total = 0;
  for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
      $total += $i;
    }
  }
  echo $total."\n";
  
  // lesson4-3
  // 処理の順番を工夫することで実装できた
  for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
      echo "FizzBuzz";
    } else if ($i % 3 == 0) {
      echo "Fizz";
    } else if ($i % 5 == 0) {
      echo "Buzz";
    } else {
      echo $i;
    }
    echo "\n";
  }

  // lesson4-4
  $numA = 1;
  $numB = 5;
  $numC = 190;
  $numD = 10;
  $numE = 46;

  $max = $numA;
  if ($max < $numB) {
    $max = $numB;
  }

  if ($max < $numC) {
    $max = $numC;
  }

  if ($max < $numD) {
    $max = $numD;
  }

  if ($max < $numE) {
    $max = $numE;
  }
  echo $max . "\n";

  // lesson4-5
  // 関数の中で文字列を配列に変換し、最初と最後の文字を比較して出力させた
  function isPalindrome($string) {
    $array = mb_str_split($string);
    for ($i = 0; $i < count($array); $i++) {
      $leftChar = $array[$i];
      $rightChar = $array[count($array) - ($i + 1)];
      if ($leftChar !== $rightChar) {
        return false;
      }
    }
    return true;
  }
  $text = "Abcba";
  if (isPalindrome($text)) {
    echo "回文です";
  } else {
    echo "回文ではありません";
  }
?>