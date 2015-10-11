<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "participante".
 *
 * @property integer $idParticipante
 * @property integer $Juego_idJuego
 * @property integer $Jugador_idJugador
 *
 * @property Juego $juegoIdJuego
 * @property Jugador $jugadorIdJugador
 * @property PosicionHasParticipante[] $posicionHasParticipantes
 */
class Participante extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'participante';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idParticipante', 'Juego_idJuego', 'Jugador_idJugador'], 'required'],
            [['idParticipante', 'Juego_idJuego', 'Jugador_idJugador'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idParticipante' => 'Id Participante',
            'Juego_idJuego' => 'Juego Id Juego',
            'Jugador_idJugador' => 'Jugador Id Jugador',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJuegoIdJuego()
    {
        return $this->hasOne(Juego::className(), ['idJuego' => 'Juego_idJuego']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJugadorIdJugador()
    {
        return $this->hasOne(Jugador::className(), ['idJugador' => 'Jugador_idJugador']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosicionHasParticipantes()
    {
        return $this->hasMany(PosicionHasParticipante::className(), ['Participante_idParticipante' => 'idParticipante']);
    }
}
