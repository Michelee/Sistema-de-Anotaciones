<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Participante;

/**
 * ParticipanteSearch represents the model behind the search form about `app\models\Participante`.
 */
class ParticipanteSearch extends Participante
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idParticipante', 'Juego_idJuego', 'Jugador_idJugador'], 'integer'],
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
        $query = Participante::find();

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
            'idParticipante' => $this->idParticipante,
            'Juego_idJuego' => $this->Juego_idJuego,
            'Jugador_idJugador' => $this->Jugador_idJugador,
        ]);

        return $dataProvider;
    }
}
