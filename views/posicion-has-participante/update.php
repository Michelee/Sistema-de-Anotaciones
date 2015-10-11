<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PosicionHasParticipante */

$this->title = 'Update Posicion Has Participante: ' . ' ' . $model->Participante_idParticipante;
$this->params['breadcrumbs'][] = ['label' => 'Posicion Has Participantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Participante_idParticipante, 'url' => ['view', 'Participante_idParticipante' => $model->Participante_idParticipante, 'Datos_has_Posicion_Datos_idDatos' => $model->Datos_has_Posicion_Datos_idDatos, 'Datos_has_Posicion_Posicion_idPosicion' => $model->Datos_has_Posicion_Posicion_idPosicion]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="posicion-has-participante-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
