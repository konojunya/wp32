<?php
/**
 *  WP32 課題3 クラスの確認1 円球計算。
 *  
 *  @author Shinzo SAITO <architshin@websarva.com>
 *  @version 1.0
 *  @copyright Sarva
 */

/**
 *  円球計算クラス。
 */
class CalcCircleAndBall {
  /**
   *  @var float 半径を表す定数プロパティ
   */
  private $radius;
  /**
   *  @var float 円周率を表す定数プロパティ
   */
  const PI = 3.14;

  /**
   *  コンストラクタ。
   */
  public function __construct($radius){
    $this->radius = $radius;
  }

  /**
   *  半径を得るゲッタ。
   * 
   *  @return float 半径。
   */
  public function getRadius(){
    return $this->radius;
  }
    
  /**
   *  円周を得るゲッタ。
   * 
   *  @return float 計算された円周。
   */
  public function getCircle(){
    return $this->radius * 2 * self::PI;
  }
    
  /**
   *  円の面積を得るゲッタ。
   * 
   *  @return float 計算された円の面積。
   */
  public function getArea(){
    return $this->radius * $this->radius * self::PI;
  }
    
  /**
   *  球の表面積を得るゲッタ。
   * 
   *  @return float 計算された球の表面積。
   */
  public function getSurface(){
    return 4 * self::PI * pow($this->radius,2);
  }
    
  /**
   *  球の体積を得るゲッタ。
   * 
   *  @return float 計算された球の体積。
   */
  public function getVolume(){
    return 4 / 3 * self::PI * pow($this->radius,3);
  }

}