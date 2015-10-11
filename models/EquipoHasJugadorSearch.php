<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\EquipoHasJugador;

/**
 * EquipoHasJugadorSearch represents the model behind the search form about `app\models\EquipoHasJugador`.
 */
class EquipoHasJugadorSearch extends EquipoHasJugador
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Equipo_idEquipo', 'Jugador_idJugador'], 'integer'],
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
        $query = EquipoHasJugador::find();

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
            'Equipo_idEquipo' => $this->Equipo_idEquipo,
            'Jugador_idJugador' => $this->Jugador_idJugador,
        ]);

        return $dataProvider;
    }
}
