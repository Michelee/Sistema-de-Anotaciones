<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posicion".
 *
 * @property integer $idPosicion
 * @property string $Nombre
 * @property string $Descripcion
 *
 * @property DatosHasPosicion[] $datosHasPosicions
 * @property Datos[] $datosIdDatos
 */
class Posicion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'posicion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idPosicion', 'Nombre'], 'required'],
            [['idPosicion'], 'integer'],
            [['Nombre', 'Descripcion'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idPosicion' => 'Id Posicion',
            'Nombre' => 'Nombre',
            'Descripcion' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDatosHasPosicions()
    {
        return $this->hasMany(DatosHasPosicion::className(), ['Posicion_idPosicion' => 'idPosicion']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDatosIdDatos()
    {
        return $this->hasMany(Datos::className(), ['idDatos' => 'Datos_idDatos'])->viaTable('datos_has_posicion', ['Posicion_idPosicion' => 'idPosicion']);
    }
}
