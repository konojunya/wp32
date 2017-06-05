<?php
/**
 *  WP32 課題3 クラスの確認1 円球計算。
 *  実行PHP
 *  このファイルから実行する。
 *  
 *  @author Shinzo SAITO <architshin@websarva.com>
 *  @version 1.0
 *  @copyright Sarva
 */

require_once("CalcCircleAndBall.class.php");

$rList = [1, 3, 5, 7, 9];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Shinzo SAITO">
  <title>WP32 課題3 | クラスの確認1 | 円球計算</title>
  <style type="text/css">
    <!--
    table {
      border-collapse: : collapse;
    }

    table th {
      border: solid 1px black;
      text-align: left;
    }

    table td {
      border: solid 1px black;
    }
    -->
  </style>
</head>
<body>
  <h1>クラスの確認1: 円球計算</h1>
  <table>
    <thead>
      <tr>
        <th>半径</th>
        <th>円周</th>
        <th>円面積</th>
        <th>球面積</th>
        <th>球体積</th>
      </tr>
    </thead>
    <tbody>
<?php
foreach($rList as $radius) {
  $calc = new CalcCircleAndBall($radius);
?>
      <tr>
        <td><?php print($calc->getRadius()) ?></td>
        <td><?php print($calc->getCircle()) ?></td>
        <td><?php print($calc->getArea()) ?></td>
        <td><?php print($calc->getsurface()) ?></td>
        <td><?php print($calc->getVolume()) ?></td>
      </tr>
<?php
}
?>
    </tbody>
  </table>
</body>
</html>