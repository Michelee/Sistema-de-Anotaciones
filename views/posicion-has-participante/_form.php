<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PosicionHasParticipante */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="posicion-has-participante-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Participante_idParticipante')->textInput() ?>

    <?= $form->field($model, 'Valor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Datos_has_Posicion_Datos_idDatos')->textInput() ?>

    <?= $form->field($model, 'Datos_has_Posicion_Posicion_idPosicion')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
