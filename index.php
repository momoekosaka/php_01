<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=2">
    <title>sanrio_slot</title>
    <h1>サンリオスロット</h1>
</head>
<body>

<!-- スロット３連 -->
<div id = box00 >
  <div id= box01 >
  
   <!-- ① -->
   </div>
   <div id= box02 >
   <!-- ② -->
   </div>
   <div id= box03 >
   <!-- ③ -->
   </div>
  </div>
 

<div id=box10>
   <button id=btn1>One</button>
   <button id=btn2>Two</button>
   <button id=btn3>Three</button>
</div> 
  

<?php

   '#btn1'.click (function (){
    // 必須　１画像を使う<img src =img/01.jpeg />
    //      ２if文を使う
    //      3 mt_rand を使う

    // ランダムな数字を生成する
    $num = mt_rand(1,4);

    // if 文を作る
    if ($num == 1){
        echo '<img src="img/01.jpg" alt="" />';
      }
    if ($num == 2){
        echo '<img src="img/02.png" alt="" />';
      }
    if ($num == 3){
        echo '<img src="img/03.jpg" alt="" />';
      }
    if ($num == 4){
       echo '<img src="img/04.jpg" alt="" />';
     }
    })

    
  


?>
</body>
</html>