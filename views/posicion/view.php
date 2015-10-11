<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Posicion */

$this->title = $model->idPosicion;
$this->params['breadcrumbs'][] = ['label' => 'Posicions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posicion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idPosicion], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idPosicion], [
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
            'idPosicion',
            'Nombre',
            'Descripcion',
        ],
    ]) ?>

</div>
