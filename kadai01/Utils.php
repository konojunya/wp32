<?php

class Utils {

  public function __construct(){
    $this->bmi = 0;
  }

  /**
   *  calc_bmi
   *  BMIの計算をする[体重 / (身長 * 身長)]
   *
   *  @param { double } $height
   *  @param { double } $weight
   */
  public function calc_bmi($height,$weight){
    $height = $height / 100;
    $bmi = $weight / ($height * $height);

    $bmi = round($bmi,1);

    $this->bmi = $bmi;
  }

  /**
   *  get_bmi
   *  BMIの値を取得
   *
   *  @return { double } $bmi
   */
  public function get_bmi(){
    return $this->bmi;
  }

  /**
   *  calc_idial_weight
   *  理想体重を計算する
   *
   *  @param { double } $height
   *  @return { double } $idial_weight
   */
  public function calc_idial_weight($height){
    $height = $height / 100;
    $idial_weight = $height * $height * 22;

    $idial_weight = round($idial_weight);

    return $idial_weight;
  }
}