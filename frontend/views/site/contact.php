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

            <label class="col-lg-3 col-form-label" for="weight">Waga (kg)</label>
            <input type="text" id="weight" name="weight"  />
            <label class="col-lg-3 col-form-label" for="height">Wzrost (m)</label>
            <input type="text" id="height" name="height"/>
            <div class="form-group">
                <?= Html::submitButton('Oblicz swoje BMI!', ['class' => 'btn btn-primary', 'name' => 'calculate-bmi']) ?>
            </div>

        <?php ActiveForm::end(); ?>


        <?php 
          if($result != false){
            echo "<b>Twoje BMI wynosi: <b>"  .$result; 

            if($result < 16){
              echo "<br>";
              echo "<b> <color =red>WYGŁODZENIE!";
            }else if( $result>=16 && $result < 17){
              echo "<br>";
              echo "<b>WYCHUDZENIE!";
            }else if( $result>17 && $result < 18.50){
              echo "<br>";
              echo "<b>NIEDOWAGA!";
            }else if( $result>=18.50 && $result < 24.99){
              echo "<br>";
              echo "<b>WAGA PRAWIDŁOWA!";
            }else if( $result>=24.99 && $result < 29.99){
              echo "<br>";
              echo "<b>NADWAGA!";
            }else if( $result>=29.99 && $result < 35){
              echo "<br>";
              echo "<b>OTYŁOŚĆ 1 STOPNIA!";
            }else if( $result>=35 && $result < 40){
              echo "<br>";
              echo "<b>OTYŁOŚĆ 2 STOPNIA!";
            }else if( $result>=40){
              echo "<br>";
              echo "<b>OTYŁOŚĆ 3 STOPNIA!";
            }
          }?>
      
</div>
