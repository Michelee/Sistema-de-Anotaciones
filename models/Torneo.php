<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "torneo".
 *
 * @property integer $idTorneo
 * @property integer $Disciplina_idDisciplina
 * @property string $Nombre
 * @property string $Descripcion
 * @property string $Fecha
 *
 * @property Juego[] $juegos
 * @property Disciplina $disciplinaIdDisciplina
 */
class Torneo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'torneo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idTorneo', 'Disciplina_idDisciplina', 'Nombre', 'Fecha'], 'required'],
            [['idTorneo', 'Disciplina_idDisciplina'], 'integer'],
            [['Fecha'], 'safe'],
            [['Nombre', 'Descripcion'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idTorneo' => 'Id Torneo',
            'Disciplina_idDisciplina' => 'Disciplina Id Disciplina',
            'Nombre' => 'Nombre',
            'Descripcion' => 'Descripcion',
            'Fecha' => 'Fecha',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJuegos()
    {
        return $this->hasMany(Juego::className(), ['Torneo_idTorneo' => 'idTorneo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDisciplinaIdDisciplina()
    {
        return $this->hasOne(Disciplina::className(), ['idDisciplina' => 'Disciplina_idDisciplina']);
    }
}
