<?php

require "./Utils.php";

$utils = new Utils();

$height = $_POST["height"];
$weight = $_POST["weight"];

$height = (double)$height;
$weight = (double)$weight;

$utils->calc_bmi($height,$weight);
$idial_weight = $utils->calc_idial_weight($height);

/**
 *  get_body_type
 *  BMIに応じたメッセージを取得する
 *
 *  @param { double } $bmi
 *  @return { string } $msg
 */
function get_body_type($bmi,$idial_weight){
  $bmi = round($bmi);

  $good = "ちょうどいいです。現状を維持しましょう。";
  $fat = "肥満です。体重" . $idial_weight . "kgを目指しましょう。";
  $thin = "やせています。体重" . $idial_weight . "kgを目指しましょう。";

  $msg = $bmi == 22 ? $good : $bmi < 22 ? $thin : $fat;

  return $msg;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>BMI計算 | 結果画面</title>
</head>
<body>
  <h1>BMI計算: 結果画面</h1>
  <p>あなたの身長： <?= $height ?>cm</p>
  <p>あなたの体重： <?= $weight ?>kg</p>

  <p>あなたのBMIは<span style="font-size: 2rem;"><?= $utils->get_bmi() ?></span>です。</p>

  <p><?= get_body_type($utils->get_bmi(),$idial_weight) ?></p>

  <a href="./inputBMI.php">戻る</a>
</body>
</html>