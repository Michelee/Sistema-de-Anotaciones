<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Datos */

$this->title = $model->idDatos;
$this->params['breadcrumbs'][] = ['label' => 'Datos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idDatos], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idDatos], [
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
            'idDatos',
            'Nombre',
            'Descripcion',
        ],
    ]) ?>

</div>
