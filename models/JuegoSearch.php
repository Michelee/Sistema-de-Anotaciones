<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Juego;

/**
 * JuegoSearch represents the model behind the search form about `app\models\Juego`.
 */
class JuegoSearch extends Juego
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idJuego', 'Equipo_idEquipo1', 'Equipo_idEquipo', 'Torneo_idTorneo'], 'integer'],
            [['Lugar', 'Fecha'], 'safe'],
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
        $query = Juego::find();

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
            'idJuego' => $this->idJuego,
            'Fecha' => $this->Fecha,
            'Equipo_idEquipo1' => $this->Equipo_idEquipo1,
            'Equipo_idEquipo' => $this->Equipo_idEquipo,
            'Torneo_idTorneo' => $this->Torneo_idTorneo,
        ]);

        $query->andFilterWhere(['like', 'Lugar', $this->Lugar]);

        return $dataProvider;
    }
}
