<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PosicionHasParticipante */

$this->title = 'Create Posicion Has Participante';
$this->params['breadcrumbs'][] = ['label' => 'Posicion Has Participantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posicion-has-participante-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
