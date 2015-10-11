<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posicion_has_participante".
 *
 * @property integer $Participante_idParticipante
 * @property string $Valor
 * @property integer $Datos_has_Posicion_Datos_idDatos
 * @property integer $Datos_has_Posicion_Posicion_idPosicion
 *
 * @property Participante $participanteIdParticipante
 * @property DatosHasPosicion $datosHasPosicionDatosIdDatos
 */
class PosicionHasParticipante extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'posicion_has_participante';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Participante_idParticipante', 'Datos_has_Posicion_Datos_idDatos', 'Datos_has_Posicion_Posicion_idPosicion'], 'required'],
            [['Participante_idParticipante', 'Datos_has_Posicion_Datos_idDatos', 'Datos_has_Posicion_Posicion_idPosicion'], 'integer'],
            [['Valor'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Participante_idParticipante' => 'Participante Id Participante',
            'Valor' => 'Valor',
            'Datos_has_Posicion_Datos_idDatos' => 'Datos Has  Posicion  Datos Id Datos',
            'Datos_has_Posicion_Posicion_idPosicion' => 'Datos Has  Posicion  Posicion Id Posicion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParticipanteIdParticipante()
    {
        return $this->hasOne(Participante::className(), ['idParticipante' => 'Participante_idParticipante']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDatosHasPosicionDatosIdDatos()
    {
        return $this->hasOne(DatosHasPosicion::className(), ['Datos_idDatos' => 'Datos_has_Posicion_Datos_idDatos', 'Posicion_idPosicion' => 'Datos_has_Posicion_Posicion_idPosicion']);
    }
}
