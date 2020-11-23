<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


use yii\grid\GridView;


$this->title = 'Таблица';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container_telefon">

  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Clicks</th>
        <th scope="col">Installs</th>
        <th scope="col">CRi,%</th>
        <th scope="col">Trials</th>
        <th scope="col">CRt,%</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if($dataProvider){
      $all_data=array();
      foreach($dataProvider as $val => $item)
      $all_data[$val]['click']=$item->click;
      $all_data[$val]['campaign_id']=$item->campaign_id;
      {
        /*echo '<pre>';
        var_dump($val);
        echo '</pre>';*/
        foreach ($item->install as $c =>$item2) {
          $all_data[$val]['install']=$item2->install;
        }
        foreach ($item->trial as $b=>$item3) {
          $all_data[$val]['trial']=$item3->trial;
        }
      }

      foreach ($all_data as $value) {
        $Cri=($value["click"]/$value["install"])*100;
        $Crt=($value["install"]/$value["trial"])*100;
        echo '<tr><th>'.$value["campaign_id"].'</th><td>'.$value["click"].'</td><td>'.$value["install"].'</td><td>'.$Cri.'</td><td>'.$value["trial"].'</td><td>'.$Crt.'</td></tr>';

      }
    }else{
      echo '<tr><th>test</th><td>test</td><td>test</td><td>test</td><td>test</td><td>test</td></tr>';
    }

      ?>

    </tbody>
  </table>
</div>
