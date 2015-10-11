<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Posicion */

$this->title = 'Create Posicion';
$this->params['breadcrumbs'][] = ['label' => 'Posicions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posicion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
