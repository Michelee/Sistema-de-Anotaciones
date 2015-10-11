<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DatosHasPosicion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="datos-has-posicion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Datos_idDatos')->textInput() ?>

    <?= $form->field($model, 'Posicion_idPosicion')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
