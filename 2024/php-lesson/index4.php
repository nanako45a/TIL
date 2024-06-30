<!-- -------------------------------------->
<!-- ----------swich文------------>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    // 変数$numを定義し、好きな数字を代入してください
    $num = 50;
    // 変数$remainderを定義し、変数$numを3で割った時の余りを代入してください
    $remainder = $num % 3;

    // switch文を用いてください
    // 変数$remainderが0の場合'大吉です'
    switch ($remainder) {
      case 0:
        echo '大吉です。';
        break;
    // $remainderが1の場合'中吉です'
      case 1:
        echo '中吉です。';
        break;
    // $remainderが2の場合'小吉です'
      case 2:
        echo '小吉です。';
        break;
    // $remainderが上記以外の場合'凶です'
      default:
        echo '凶です。';
        break;
    }
  ?>

</body>
</html>