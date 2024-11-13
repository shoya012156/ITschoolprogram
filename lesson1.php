<!-- lesson1-1 -->
<?php 
  // 変数に代入してechoで出力
  $hello = "Hello World";
  echo $hello;
?>

<!-- lesson1-2 -->
<?php 
  // 文字列と変数の連結
  $name = "清水翔矢";
  echo "Welcome " . $name;
?>
<!-- lesson1-3 -->
<?php 
  // リンゴの単価
  $apple = 200;
  // リンゴの個数
  $appleNumber = 3;
  // リンゴの合計額
  $applePrice = $apple * $appleNumber;
  // オレンジの単価
  $orange = 100;
  // オレンジの個数
  $orangeNumber = 4;
  // オレンジの合計額
  $orangePrice = $orange * $orangeNumber;
  // りんごとオレンジの合計額を足して出力
  echo "合計金額は".$applePrice + $orangePrice ."円です";
?>
<!-- lesson1-4 -->
<?php 
  // 配列に3色を格納し添字で出力
  $array = array("red","blue","green");
  echo $array[1];
?>
<!-- lesson1-5 -->
<?php 
  // usersという配列に3人のユーザーを入れる
  // さらにユーザー一人ひとりにも配列を作り、個人情報を格納する
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