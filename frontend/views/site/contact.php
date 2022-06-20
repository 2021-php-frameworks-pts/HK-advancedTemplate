<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'BMI';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(['id' => 'calculate-bmi']); ?>

            <label class="col-lg-3 col-form-label" for="weight">Weight</label>
            <input type="text" id="weight" name="weight"  />
            <label class="col-lg-3 col-form-label" for="height">Height</label>
            <input type="text" id="height" name="height"/>
            <div class="form-group">
                <?= Html::submitButton('Calculate BMI', ['class' => 'btn btn-primary', 'name' => 'calculate-bmi']) ?>
            </div>

        <?php ActiveForm::end(); ?>


        <?php 
          if($result != false){
            echo $result; 
          }?>
      
</div>
