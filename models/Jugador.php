<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jugador".
 *
 * @property integer $idJugador
 * @property integer $Disciplina_idDisciplina
 * @property string $Nombre
 * @property string $Apellido
 * @property integer $Edad
 * @property string $Correo
 *
 * @property EquipoHasJugador[] $equipoHasJugadors
 * @property Equipo[] $equipoIdEquipos
 * @property Disciplina $disciplinaIdDisciplina
 * @property Participante[] $participantes
 */
class Jugador extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jugador';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idJugador', 'Disciplina_idDisciplina', 'Nombre', 'Apellido', 'Correo'], 'required'],
            [['idJugador', 'Disciplina_idDisciplina', 'Edad'], 'integer'],
            [['Nombre', 'Apellido', 'Correo'], 'string', 'max' => 45],
            [['Correo'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idJugador' => 'Id Jugador',
            'Disciplina_idDisciplina' => 'Disciplina Id Disciplina',
            'Nombre' => 'Nombre',
            'Apellido' => 'Apellido',
            'Edad' => 'Edad',
            'Correo' => 'Correo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEquipoHasJugadors()
    {
        return $this->hasMany(EquipoHasJugador::className(), ['Jugador_idJugador' => 'idJugador']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEquipoIdEquipos()
    {
        return $this->hasMany(Equipo::className(), ['idEquipo' => 'Equipo_idEquipo'])->viaTable('equipo_has_jugador', ['Jugador_idJugador' => 'idJugador']);
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
    public function getParticipantes()
    {
        return $this->hasMany(Participante::className(), ['Jugador_idJugador' => 'idJugador']);
    }
}
