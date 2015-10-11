<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DatosHasPosicionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Datos Has Posicions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datos-has-posicion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Datos Has Posicion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Datos_idDatos',
            'Posicion_idPosicion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
