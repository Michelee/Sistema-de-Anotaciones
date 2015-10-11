<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "datos_has_posicion".
 *
 * @property integer $Datos_idDatos
 * @property integer $Posicion_idPosicion
 *
 * @property Datos $datosIdDatos
 * @property Posicion $posicionIdPosicion
 * @property PosicionHasParticipante[] $posicionHasParticipantes
 */
class DatosHasPosicion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'datos_has_posicion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Datos_idDatos', 'Posicion_idPosicion'], 'required'],
            [['Datos_idDatos', 'Posicion_idPosicion'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Datos_idDatos' => 'Datos Id Datos',
            'Posicion_idPosicion' => 'Posicion Id Posicion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDatosIdDatos()
    {
        return $this->hasOne(Datos::className(), ['idDatos' => 'Datos_idDatos']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosicionIdPosicion()
    {
        return $this->hasOne(Posicion::className(), ['idPosicion' => 'Posicion_idPosicion']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosicionHasParticipantes()
    {
        return $this->hasMany(PosicionHasParticipante::className(), ['Datos_has_Posicion_Datos_idDatos' => 'Datos_idDatos', 'Datos_has_Posicion_Posicion_idPosicion' => 'Posicion_idPosicion']);
    }
}
