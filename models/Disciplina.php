<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "disciplina".
 *
 * @property integer $idDisciplina
 * @property string $Nombre
 */
class Disciplina extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'disciplina';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idDisciplina', 'Nombre'], 'required'],
            [['idDisciplina'], 'integer'],
            [['Nombre'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idDisciplina' => 'Id Disciplina',
            'Nombre' => 'Nombre',
        ];
    }
}
