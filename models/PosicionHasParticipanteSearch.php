<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PosicionHasParticipante;

/**
 * PosicionHasParticipanteSearch represents the model behind the search form about `app\models\PosicionHasParticipante`.
 */
class PosicionHasParticipanteSearch extends PosicionHasParticipante
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Participante_idParticipante', 'Datos_has_Posicion_Datos_idDatos', 'Datos_has_Posicion_Posicion_idPosicion'], 'integer'],
            [['Valor'], 'safe'],
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
        $query = PosicionHasParticipante::find();

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
            'Participante_idParticipante' => $this->Participante_idParticipante,
            'Datos_has_Posicion_Datos_idDatos' => $this->Datos_has_Posicion_Datos_idDatos,
            'Datos_has_Posicion_Posicion_idPosicion' => $this->Datos_has_Posicion_Posicion_idPosicion,
        ]);

        $query->andFilterWhere(['like', 'Valor', $this->Valor]);

        return $dataProvider;
    }
}
