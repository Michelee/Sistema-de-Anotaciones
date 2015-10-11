<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JuegoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="juego-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idJuego') ?>

    <?= $form->field($model, 'Lugar') ?>

    <?= $form->field($model, 'Fecha') ?>

    <?= $form->field($model, 'Equipo_idEquipo1') ?>

    <?= $form->field($model, 'Equipo_idEquipo') ?>

    <?php // echo $form->field($model, 'Torneo_idTorneo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
