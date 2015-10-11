<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PosicionHasParticipante */

$this->title = $model->Participante_idParticipante;
$this->params['breadcrumbs'][] = ['label' => 'Posicion Has Participantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posicion-has-participante-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Participante_idParticipante' => $model->Participante_idParticipante, 'Datos_has_Posicion_Datos_idDatos' => $model->Datos_has_Posicion_Datos_idDatos, 'Datos_has_Posicion_Posicion_idPosicion' => $model->Datos_has_Posicion_Posicion_idPosicion], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Participante_idParticipante' => $model->Participante_idParticipante, 'Datos_has_Posicion_Datos_idDatos' => $model->Datos_has_Posicion_Datos_idDatos, 'Datos_has_Posicion_Posicion_idPosicion' => $model->Datos_has_Posicion_Posicion_idPosicion], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Participante_idParticipante',
            'Valor',
            'Datos_has_Posicion_Datos_idDatos',
            'Datos_has_Posicion_Posicion_idPosicion',
        ],
    ]) ?>

</div>
