<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PosicionHasParticipanteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="posicion-has-participante-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Participante_idParticipante') ?>

    <?= $form->field($model, 'Valor') ?>

    <?= $form->field($model, 'Datos_has_Posicion_Datos_idDatos') ?>

    <?= $form->field($model, 'Datos_has_Posicion_Posicion_idPosicion') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
