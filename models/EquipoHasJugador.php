<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "equipo_has_jugador".
 *
 * @property integer $Equipo_idEquipo
 * @property integer $Jugador_idJugador
 *
 * @property Equipo $equipoIdEquipo
 * @property Jugador $jugadorIdJugador
 */
class EquipoHasJugador extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'equipo_has_jugador';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Equipo_idEquipo', 'Jugador_idJugador'], 'required'],
            [['Equipo_idEquipo', 'Jugador_idJugador'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Equipo_idEquipo' => 'Equipo Id Equipo',
            'Jugador_idJugador' => 'Jugador Id Jugador',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEquipoIdEquipo()
    {
        return $this->hasOne(Equipo::className(), ['idEquipo' => 'Equipo_idEquipo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJugadorIdJugador()
    {
        return $this->hasOne(Jugador::className(), ['idJugador' => 'Jugador_idJugador']);
    }
}
