<?php
/**
 *  WP32 課題3 クラスの確認2 誕生日リマインダ。
 *  
 *  @author Shinzo SAITO <architshin@websarva.com>
 *  @version 1.0
 *  @copyright Sarva
 */

/**
 *  ガールフレンドを表すクラス。
 */
class GirlFriend {
  /**
   *  @var string 名前を表すプロパティ。
   */
  private $name;
  /**
   *  @var int 誕生年プロパティ。
   */
  private $birthYear;
  /**
   *  @var int 誕生月を表すプロパティ。
   */
  private $birthMonth;
  /**
   *  @var int 誕生日を表すプロパティ。
   */
  private $birthDay;

  /**
   *  コンストラクタ。
   *
   *  @param string $name 名前。
   *  @param int $birthYear 誕生年。
   *  @param int $birthMonth 誕生月。
   *  @param int $birthDay 誕生日。
   */
  public function __construct($name,$birthYear,$birthMonth,$birthDay){
    $this->name = $name;
    $this->birthYear = $birthYear;
    $this->birthMonth = $birthMonth;
    $this->birthDay = $birthDay;
  }

  /**
   *  引数で渡された月が誕生月かどうかを判定するメソッド。
   *
   *  @param int $month 判定に使われる月。
   *  @return boolean 誕生月の場合はtrue、そうでない場合はfalse。
   */
  public function isBirthMonth($month){
    if($month == $this->birthMonth){
      return true;
    }else{
      return false;
    }
  }

  /**
   *  引数で渡された年に何歳になるかを計算するメソッド。
   *
   *  @param int $year 計算の基となる年。
   *  @return int 年齢。
   */
  public function getAge($year){
    return $year - $this->birthYear;
  }

  /**
   *  名前プロパティのゲッタ。
   *
   *  @return string 名前。
   */
  public function getName(){
    return $this->name;
  }
  
  /**
   *  誕生年プロパティのゲッタ。
   *
   *  @return string 誕生年。
   */
  public function getBirthYear(){
    return $this->birthYear;
  }
  
  /**
   *  誕生月プロパティのゲッタ。
   *
   *  @return string 誕生月。
   */
  public function getBirthMonth(){
    return $this->birthMonth;
  }
  
  /**
   *  誕生日プロパティのゲッタ。
   *
   *  @return string 誕生日。
   */
  public function getBirthDay(){
    return $this->birthDay;
  }
}