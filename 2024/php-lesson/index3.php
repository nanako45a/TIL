<!-- -------------------------------------->
<!-- ----------条件分岐（if-else文）------------>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php
    // $ageという変数に自分の年齢を代入してください
    $age = 21;

    // if-else文を用いて、$age変数が30以上の場合は'あなたは30歳以上です。'と出力。それ以外の場合は'あなたは30歳未満です。'と出力してください。
    if ($age >= 30) {
      echo 'あなたは30歳以上です。';
    } else {
      echo 'あなたは30歳未満です。';
    }
    
  ?>

</body>
</html>

<!-- -------------------------------------->
<!-- ----------条件分岐（if-else if-else文）------------>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php
  
    $x = 1071;
    
    // 以下にif-elseif-else文を書いてください
    // 3の倍数：3で割ったときの余りが0（「$x % 3 == 0」）
    if ($x % 3 == 0 && $x % 7 == 0) {
      echo 'xは3の倍数かつ7の倍数です。';
    } elseif ($x % 3 == 0) {
      echo 'xは3の倍数ですが7の倍数ではありません。';
    } elseif ($x % 7 == 0) {
      echo 'xは7の倍数ですが3の倍数ではありません。';
    } else {
      echo 'xは7の倍数でも3の倍数でもありません。';
    }
    
  ?>

</body>
</html>