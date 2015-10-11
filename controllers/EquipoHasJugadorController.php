<?php

namespace app\controllers;

use Yii;
use app\models\EquipoHasJugador;
use app\models\EquipoHasJugadorSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EquipoHasJugadorController implements the CRUD actions for EquipoHasJugador model.
 */
class EquipoHasJugadorController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all EquipoHasJugador models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EquipoHasJugadorSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single EquipoHasJugador model.
     * @param integer $Equipo_idEquipo
     * @param integer $Jugador_idJugador
     * @return mixed
     */
    public function actionView($Equipo_idEquipo, $Jugador_idJugador)
    {
        return $this->render('view', [
            'model' => $this->findModel($Equipo_idEquipo, $Jugador_idJugador),
        ]);
    }

    /**
     * Creates a new EquipoHasJugador model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new EquipoHasJugador();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Equipo_idEquipo' => $model->Equipo_idEquipo, 'Jugador_idJugador' => $model->Jugador_idJugador]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing EquipoHasJugador model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $Equipo_idEquipo
     * @param integer $Jugador_idJugador
     * @return mixed
     */
    public function actionUpdate($Equipo_idEquipo, $Jugador_idJugador)
    {
        $model = $this->findModel($Equipo_idEquipo, $Jugador_idJugador);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Equipo_idEquipo' => $model->Equipo_idEquipo, 'Jugador_idJugador' => $model->Jugador_idJugador]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing EquipoHasJugador model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $Equipo_idEquipo
     * @param integer $Jugador_idJugador
     * @return mixed
     */
    public function actionDelete($Equipo_idEquipo, $Jugador_idJugador)
    {
        $this->findModel($Equipo_idEquipo, $Jugador_idJugador)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the EquipoHasJugador model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $Equipo_idEquipo
     * @param integer $Jugador_idJugador
     * @return EquipoHasJugador the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Equipo_idEquipo, $Jugador_idJugador)
    {
        if (($model = EquipoHasJugador::findOne(['Equipo_idEquipo' => $Equipo_idEquipo, 'Jugador_idJugador' => $Jugador_idJugador])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
