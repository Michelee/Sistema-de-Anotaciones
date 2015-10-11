<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DatosHasPosicion;

/**
 * DatosHasPosicionSearch represents the model behind the search form about `app\models\DatosHasPosicion`.
 */
class DatosHasPosicionSearch extends DatosHasPosicion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Datos_idDatos', 'Posicion_idPosicion'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = DatosHasPosicion::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Datos_idDatos' => $this->Datos_idDatos,
            'Posicion_idPosicion' => $this->Posicion_idPosicion,
        ]);

        return $dataProvider;
    }
}
