<?php

require_once("GirlFriend.class.php");

$girl_friends = [
  new GirlFriend("まゆみ",1988,1,5),
  new GirlFriend("さちこ",1993,5,15),
  new GirlFriend("まい",1986,5,25),
  new GirlFriend("なみ",1989,8,3),
  new GirlFriend("えり",1991,11,19),
  new GirlFriend("りえ",1987,12,23)
];

define("CURRENT_YEAR",Date("Y"));

function render($month,$girl_friends){
  $messages = [];
  foreach($girl_friends as $girl){
    if($girl->isBirthMonth($month)){
      $messages[] = $girl->getName()."が".$girl->getBirthDay()."日に誕生日です。".$girl->getAge(CURRENT_YEAR)."歳になります。メッセージを送りましょう!<br/>";
    }
  }
  
  echo "<dt>".$month."月</dt>";
  foreach($messages as $m){
    echo "<dd>".$m."</dd>";
  }
  
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>WP32 課題3 | クラス確認2 | 誕生日リマインダ</title>
</head>
<body>
  <h1>クラスの確認2: 誕生日リマインダ</h1>
  
  <dl>
  <?php for($i=1; $i <= 12; $i++) render($i,$girl_friends); ?>
  </dl>

</body>
</html>