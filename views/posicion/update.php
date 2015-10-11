<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Posicion */

$this->title = 'Update Posicion: ' . ' ' . $model->idPosicion;
$this->params['breadcrumbs'][] = ['label' => 'Posicions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idPosicion, 'url' => ['view', 'id' => $model->idPosicion]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="posicion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
