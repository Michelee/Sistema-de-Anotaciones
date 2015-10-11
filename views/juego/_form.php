<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Juego */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="juego-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idJuego')->textInput() ?>

    <?= $form->field($model, 'Lugar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Fecha')->textInput() ?>

    <?= $form->field($model, 'Equipo_idEquipo1')->textInput() ?>

    <?= $form->field($model, 'Equipo_idEquipo')->textInput() ?>

    <?= $form->field($model, 'Torneo_idTorneo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
