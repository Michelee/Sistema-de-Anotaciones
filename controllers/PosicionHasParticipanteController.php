<?php

namespace app\controllers;

use Yii;
use app\models\PosicionHasParticipante;
use app\models\PosicionHasParticipanteSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PosicionHasParticipanteController implements the CRUD actions for PosicionHasParticipante model.
 */
class PosicionHasParticipanteController extends Controller
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
     * Lists all PosicionHasParticipante models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PosicionHasParticipanteSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PosicionHasParticipante model.
     * @param integer $Participante_idParticipante
     * @param integer $Datos_has_Posicion_Datos_idDatos
     * @param integer $Datos_has_Posicion_Posicion_idPosicion
     * @return mixed
     */
    public function actionView($Participante_idParticipante, $Datos_has_Posicion_Datos_idDatos, $Datos_has_Posicion_Posicion_idPosicion)
    {
        return $this->render('view', [
            'model' => $this->findModel($Participante_idParticipante, $Datos_has_Posicion_Datos_idDatos, $Datos_has_Posicion_Posicion_idPosicion),
        ]);
    }

    /**
     * Creates a new PosicionHasParticipante model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PosicionHasParticipante();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Participante_idParticipante' => $model->Participante_idParticipante, 'Datos_has_Posicion_Datos_idDatos' => $model->Datos_has_Posicion_Datos_idDatos, 'Datos_has_Posicion_Posicion_idPosicion' => $model->Datos_has_Posicion_Posicion_idPosicion]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing PosicionHasParticipante model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $Participante_idParticipante
     * @param integer $Datos_has_Posicion_Datos_idDatos
     * @param integer $Datos_has_Posicion_Posicion_idPosicion
     * @return mixed
     */
    public function actionUpdate($Participante_idParticipante, $Datos_has_Posicion_Datos_idDatos, $Datos_has_Posicion_Posicion_idPosicion)
    {
        $model = $this->findModel($Participante_idParticipante, $Datos_has_Posicion_Datos_idDatos, $Datos_has_Posicion_Posicion_idPosicion);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Participante_idParticipante' => $model->Participante_idParticipante, 'Datos_has_Posicion_Datos_idDatos' => $model->Datos_has_Posicion_Datos_idDatos, 'Datos_has_Posicion_Posicion_idPosicion' => $model->Datos_has_Posicion_Posicion_idPosicion]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing PosicionHasParticipante model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $Participante_idParticipante
     * @param integer $Datos_has_Posicion_Datos_idDatos
     * @param integer $Datos_has_Posicion_Posicion_idPosicion
     * @return mixed
     */
    public function actionDelete($Participante_idParticipante, $Datos_has_Posicion_Datos_idDatos, $Datos_has_Posicion_Posicion_idPosicion)
    {
        $this->findModel($Participante_idParticipante, $Datos_has_Posicion_Datos_idDatos, $Datos_has_Posicion_Posicion_idPosicion)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PosicionHasParticipante model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $Participante_idParticipante
     * @param integer $Datos_has_Posicion_Datos_idDatos
     * @param integer $Datos_has_Posicion_Posicion_idPosicion
     * @return PosicionHasParticipante the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Participante_idParticipante, $Datos_has_Posicion_Datos_idDatos, $Datos_has_Posicion_Posicion_idPosicion)
    {
        if (($model = PosicionHasParticipante::findOne(['Participante_idParticipante' => $Participante_idParticipante, 'Datos_has_Posicion_Datos_idDatos' => $Datos_has_Posicion_Datos_idDatos, 'Datos_has_Posicion_Posicion_idPosicion' => $Datos_has_Posicion_Posicion_idPosicion])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
