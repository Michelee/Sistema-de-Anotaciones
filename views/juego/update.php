<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Juego */

$this->title = 'Update Juego: ' . ' ' . $model->idJuego;
$this->params['breadcrumbs'][] = ['label' => 'Juegos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idJuego, 'url' => ['view', 'id' => $model->idJuego]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="juego-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
