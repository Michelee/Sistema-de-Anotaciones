<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "juego".
 *
 * @property integer $idJuego
 * @property string $Lugar
 * @property string $Fecha
 * @property integer $Equipo_idEquipo1
 * @property integer $Equipo_idEquipo
 * @property integer $Torneo_idTorneo
 *
 * @property Equipo $equipoIdEquipo1
 * @property Equipo $equipoIdEquipo
 * @property Torneo $torneoIdTorneo
 * @property Participante[] $participantes
 */
class Juego extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'juego';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idJuego', 'Lugar', 'Fecha', 'Equipo_idEquipo1', 'Equipo_idEquipo', 'Torneo_idTorneo'], 'required'],
            [['idJuego', 'Equipo_idEquipo1', 'Equipo_idEquipo', 'Torneo_idTorneo'], 'integer'],
            [['Fecha'], 'safe'],
            [['Lugar'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idJuego' => 'Id Juego',
            'Lugar' => 'Lugar',
            'Fecha' => 'Fecha',
            'Equipo_idEquipo1' => 'Equipo Id Equipo1',
            'Equipo_idEquipo' => 'Equipo Id Equipo',
            'Torneo_idTorneo' => 'Torneo Id Torneo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEquipoIdEquipo1()
    {
        return $this->hasOne(Equipo::className(), ['idEquipo' => 'Equipo_idEquipo1']);
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
    public function getTorneoIdTorneo()
    {
        return $this->hasOne(Torneo::className(), ['idTorneo' => 'Torneo_idTorneo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParticipantes()
    {
        return $this->hasMany(Participante::className(), ['Juego_idJuego' => 'idJuego']);
    }
}
