<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'O mnie';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Jestem studentem 6 semestru informatyki na WST. Na codzień pracuję jako analityk biznesowy IT, w firmie wytwarząjącej oprogramowanie wspomagające badania kliniczne.</p>
    <h4>Z racji tematyki okołomedycznej, dzięki tej aplikacji napisanej w PHP, po kliknięciu w zakładkę "Oblicz swoje BMI!" będziesz mógł sprawdzić, czy Twoja waga jest prawidłowa!</h4>
    <img src="BMI.jpg" alt="BMI">
</div>
