<?php

namespace app\controllers;

use Yii;
use app\models\DatosHasPosicion;
use app\models\DatosHasPosicionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DatosHasPosicioController implements the CRUD actions for DatosHasPosicion model.
 */
class DatosHasPosicioController extends Controller
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
     * Lists all DatosHasPosicion models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DatosHasPosicionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DatosHasPosicion model.
     * @param integer $Datos_idDatos
     * @param integer $Posicion_idPosicion
     * @return mixed
     */
    public function actionView($Datos_idDatos, $Posicion_idPosicion)
    {
        return $this->render('view', [
            'model' => $this->findModel($Datos_idDatos, $Posicion_idPosicion),
        ]);
    }

    /**
     * Creates a new DatosHasPosicion model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DatosHasPosicion();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Datos_idDatos' => $model->Datos_idDatos, 'Posicion_idPosicion' => $model->Posicion_idPosicion]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing DatosHasPosicion model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $Datos_idDatos
     * @param integer $Posicion_idPosicion
     * @return mixed
     */
    public function actionUpdate($Datos_idDatos, $Posicion_idPosicion)
    {
        $model = $this->findModel($Datos_idDatos, $Posicion_idPosicion);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Datos_idDatos' => $model->Datos_idDatos, 'Posicion_idPosicion' => $model->Posicion_idPosicion]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing DatosHasPosicion model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $Datos_idDatos
     * @param integer $Posicion_idPosicion
     * @return mixed
     */
    public function actionDelete($Datos_idDatos, $Posicion_idPosicion)
    {
        $this->findModel($Datos_idDatos, $Posicion_idPosicion)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DatosHasPosicion model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $Datos_idDatos
     * @param integer $Posicion_idPosicion
     * @return DatosHasPosicion the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Datos_idDatos, $Posicion_idPosicion)
    {
        if (($model = DatosHasPosicion::findOne(['Datos_idDatos' => $Datos_idDatos, 'Posicion_idPosicion' => $Posicion_idPosicion])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
