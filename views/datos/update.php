<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Datos */

$this->title = 'Update Datos: ' . ' ' . $model->idDatos;
$this->params['breadcrumbs'][] = ['label' => 'Datos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idDatos, 'url' => ['view', 'id' => $model->idDatos]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="datos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
