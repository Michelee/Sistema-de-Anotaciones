<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DatosHasPosicion */

$this->title = 'Create Datos Has Posicion';
$this->params['breadcrumbs'][] = ['label' => 'Datos Has Posicions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datos-has-posicion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
