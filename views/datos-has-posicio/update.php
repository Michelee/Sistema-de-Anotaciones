<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DatosHasPosicion */

$this->title = 'Update Datos Has Posicion: ' . ' ' . $model->Datos_idDatos;
$this->params['breadcrumbs'][] = ['label' => 'Datos Has Posicions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Datos_idDatos, 'url' => ['view', 'Datos_idDatos' => $model->Datos_idDatos, 'Posicion_idPosicion' => $model->Posicion_idPosicion]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="datos-has-posicion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
