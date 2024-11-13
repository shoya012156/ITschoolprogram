<!-- lesson1-1 -->
<?php 
  $hello = "Hello World";
  echo $hello;
?>

<!-- lesson1-2 -->
<?php 
  $name = "清水翔矢";
  echo "Welcome " . $name;
?>
<!-- lesson1-3 -->
<?php 
  $apple = 200;
  $appleNumber = 3;
  $applePrice = $apple * $appleNumber;
  $orange = 100;
  $orangeNumber = 4;
  $orangePrice = $orange * $orangeNumber;
  echo "合計金額は".$applePrice + $orangePrice ."円です";
?>
<!-- lesson1-4 -->
<?php 
  $array = array("red","blue","green");
  echo $array[1];
?>
<!-- lesson1-5 -->
<?php 
  $users = [
    'user1' => [
      'name' => '佐藤',
      'age' => '36才',
      'job' => '営業', 
    ],
    'user2' => [
      'name' => '田中',
      'age' => '23才',
      'job' => '事務', 
    ],
    'user3' => [
      'name' => '吉田',
      'age' => '23才',
      'job' => '社長', 
    ],
  ];
  
  echo $users['user2']['age'];
?> 