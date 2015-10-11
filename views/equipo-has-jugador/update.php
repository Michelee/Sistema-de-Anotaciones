<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EquipoHasJugador */

$this->title = 'Update Equipo Has Jugador: ' . ' ' . $model->Equipo_idEquipo;
$this->params['breadcrumbs'][] = ['label' => 'Equipo Has Jugadors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Equipo_idEquipo, 'url' => ['view', 'Equipo_idEquipo' => $model->Equipo_idEquipo, 'Jugador_idJugador' => $model->Jugador_idJugador]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="equipo-has-jugador-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
