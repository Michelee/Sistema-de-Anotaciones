<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "equipo".
 *
 * @property integer $idEquipo
 * @property integer $Disciplina_idDisciplina
 * @property string $Nombre
 * @property string $Descripcion
 *
 * @property Disciplina $disciplinaIdDisciplina
 * @property EquipoHasJugador[] $equipoHasJugadors
 * @property Jugador[] $jugadorIdJugadors
 * @property Juego[] $juegos
 * @property Juego[] $juegos0
 */
class Equipo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'equipo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idEquipo', 'Disciplina_idDisciplina', 'Nombre'], 'required'],
            [['idEquipo', 'Disciplina_idDisciplina'], 'integer'],
            [['Nombre', 'Descripcion'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idEquipo' => 'Id Equipo',
            'Disciplina_idDisciplina' => 'Disciplina Id Disciplina',
            'Nombre' => 'Nombre',
            'Descripcion' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDisciplinaIdDisciplina()
    {
        return $this->hasOne(Disciplina::className(), ['idDisciplina' => 'Disciplina_idDisciplina']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEquipoHasJugadors()
    {
        return $this->hasMany(EquipoHasJugador::className(), ['Equipo_idEquipo' => 'idEquipo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJugadorIdJugadors()
    {
        return $this->hasMany(Jugador::className(), ['idJugador' => 'Jugador_idJugador'])->viaTable('equipo_has_jugador', ['Equipo_idEquipo' => 'idEquipo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJuegos()
    {
        return $this->hasMany(Juego::className(), ['Equipo_idEquipo1' => 'idEquipo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJuegos0()
    {
        return $this->hasMany(Juego::className(), ['Equipo_idEquipo' => 'idEquipo']);
    }
}
