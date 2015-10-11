<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Juego */

$this->title = 'Create Juego';
$this->params['breadcrumbs'][] = ['label' => 'Juegos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="juego-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
