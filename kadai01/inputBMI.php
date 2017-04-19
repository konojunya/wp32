<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>BMI計算 | 入力画面</title>
</head>
<body>
  <h1>BMI計算: 入力画面</h1>
  <p>身長と体重を入力し、計算ボタンをクリックしてください。</p>
  <form action="./calcBMI.php" method="post">
    <table>
      <tr>
        <th>身長</th>
        <td><input type="text" name="height">cm</td>
      </tr>
      <tr>
        <th>体重</th>
        <td><input type="text" name="weight">kg</td>
      </tr>
    </table>
    <input type="submit" value="計算">
  </form>
</body>
</html>