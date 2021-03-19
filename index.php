<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    
    // おみくじアプリ
    // 必須　１画像を使う<img src =img/01.jpeg />
    //      ２if文を使う
    //      3mt_rand を使う

    // ランダムな数字を生成する
    echo "<br>";
    $num = mt_rand(1,3);
    // echo $num;
   
    // if 文を作る
    if ($num == 1){
        echo '<img src="img/01.png" alt="" />';
      }
    if ($num == 2){
        echo '<img src="img/02.jpg" alt="" />';
      }
      if ($num == 3){
        echo '<img src="img/03.jpg" alt="" />';
      }

?>
</body>
</html>