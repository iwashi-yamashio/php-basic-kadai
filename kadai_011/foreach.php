<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>kadai_011</title>
</head>
<body>
  <?php
//連装配列に値を代入する
$array_data=['名前'=>'玉ねぎ','値段'=>'200','産地'=>'北海道',];

//値を１つずつ順番に出力する
foreach ($array_data as $key=>$value){
  echo "{$key}:{$value}<br>";
}
  ?>
</body>
</html>