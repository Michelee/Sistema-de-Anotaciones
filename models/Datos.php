<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "datos".
 *
 * @property integer $idDatos
 * @property string $Nombre
 * @property string $Descripcion
 *
 * @property DatosHasPosicion[] $datosHasPosicions
 * @property Posicion[] $posicionIdPosicions
 */
class Datos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'datos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idDatos', 'Nombre'], 'required'],
            [['idDatos'], 'integer'],
            [['Nombre', 'Descripcion'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idDatos' => 'Id Datos',
            'Nombre' => 'Nombre',
            'Descripcion' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDatosHasPosicions()
    {
        return $this->hasMany(DatosHasPosicion::className(), ['Datos_idDatos' => 'idDatos']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosicionIdPosicions()
    {
        return $this->hasMany(Posicion::className(), ['idPosicion' => 'Posicion_idPosicion'])->viaTable('datos_has_posicion', ['Datos_idDatos' => 'idDatos']);
    }
}
