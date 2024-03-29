<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jugador */

$this->title = 'Update Jugador: ' . ' ' . $model->idJugador;
$this->params['breadcrumbs'][] = ['label' => 'Jugadors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idJugador, 'url' => ['view', 'id' => $model->idJugador]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jugador-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
