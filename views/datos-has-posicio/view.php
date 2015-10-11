<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DatosHasPosicion */

$this->title = $model->Datos_idDatos;
$this->params['breadcrumbs'][] = ['label' => 'Datos Has Posicions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datos-has-posicion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Datos_idDatos' => $model->Datos_idDatos, 'Posicion_idPosicion' => $model->Posicion_idPosicion], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Datos_idDatos' => $model->Datos_idDatos, 'Posicion_idPosicion' => $model->Posicion_idPosicion], [
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
            'Datos_idDatos',
            'Posicion_idPosicion',
        ],
    ]) ?>

</div>
