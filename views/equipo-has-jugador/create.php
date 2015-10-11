<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EquipoHasJugador */

$this->title = 'Create Equipo Has Jugador';
$this->params['breadcrumbs'][] = ['label' => 'Equipo Has Jugadors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="equipo-has-jugador-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
