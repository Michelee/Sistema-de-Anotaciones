<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\EquipoHasJugador */

$this->title = $model->Equipo_idEquipo;
$this->params['breadcrumbs'][] = ['label' => 'Equipo Has Jugadors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="equipo-has-jugador-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Equipo_idEquipo' => $model->Equipo_idEquipo, 'Jugador_idJugador' => $model->Jugador_idJugador], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Equipo_idEquipo' => $model->Equipo_idEquipo, 'Jugador_idJugador' => $model->Jugador_idJugador], [
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
            'Equipo_idEquipo',
            'Jugador_idJugador',
        ],
    ]) ?>

</div>
