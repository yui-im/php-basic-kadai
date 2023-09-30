<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>kadai_005<title>
</head>    
  <body>
  <p>      
 <?php
 //変数に値を代入し合計を計算
 $score = array(80, 60, 55, 40, 100, 25, 80, 95, 30, 60);

 //変数scoreの合計点を計算
 $total_score = array_sum($score);

 //平均点を計算
 $average_score = $total_score / 10;

 //平均点を出力
 echo $average_score;
 ?>
</p>
</body>
</html>
