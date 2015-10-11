<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PosicionHasParticipanteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posicion Has Participantes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posicion-has-participante-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Posicion Has Participante', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Participante_idParticipante',
            'Valor',
            'Datos_has_Posicion_Datos_idDatos',
            'Datos_has_Posicion_Posicion_idPosicion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
