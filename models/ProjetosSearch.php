<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Plants;

/**
 * ProjetosSearch represents the model behind the search form of `app\models\Plants`.
 */
class ProjetosSearch extends Plants
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id', 'Porta de Acesso', 'Status_M100', 'Status_M101', 'Status_M102', 'Status_M103', 'Status_M104', 'Status_M105', 'Status_M106', 'Status_M107', 'Status_M108', 'Status_M109', 'Status_M110', 'Status_M111', 'Status_M112', 'Status_M113', 'Status_M114', 'Status_M115', 'Status_M116', 'Status_M117', 'Status_M118', 'Status_M119', 'Status_M120', 'Status_M121', 'Status_M122', 'Status_M123', 'Status_M124', 'Status_M125', 'Status_M126', 'Status_M127', 'Status_M128', 'Status_M129', 'Status_M130', 'Status_M131', 'Status_M132', 'Status_M133', 'Status_M134', 'Status_M135', 'Status_M136', 'Status_M137', 'Status_M138', 'Status_M139'], 'integer'],
            [['Nome da Planta', 'IP da Planta', 'Entrada 0', 'Entrada 1', 'Entrada 2', 'Entrada 3', 'Entrada 4', 'Entrada 5', 'Entrada 6', 'Entrada 7', 'Entrada 8', 'Entrada 9', 'Entrada 10', 'Entrada 11', 'Entrada 12', 'Entrada 13', 'Entrada 14', 'Entrada 15', 'Entrada 16', 'Entrada 17', 'Entrada 18', 'Entrada 19', 'Saída 0', 'Saída 1', 'Saída 2', 'Saída 3', 'Saída 4', 'Saída 5', 'Saída 6', 'Saída 7', 'Saída 8', 'Saída 9', 'Saída 10', 'Saída 11', 'Saída 12', 'Saída 13', 'Saída 14', 'Saída 15', 'Saída 16', 'Saída 17', 'Saída 18', 'Saída 19'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Plants::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'Id' => $this->Id,
            'Porta de Acesso' => $this->Porta de Acesso,
            'Status_M100' => $this->Status_M100,
            'Status_M101' => $this->Status_M101,
            'Status_M102' => $this->Status_M102,
            'Status_M103' => $this->Status_M103,
            'Status_M104' => $this->Status_M104,
            'Status_M105' => $this->Status_M105,
            'Status_M106' => $this->Status_M106,
            'Status_M107' => $this->Status_M107,
            'Status_M108' => $this->Status_M108,
            'Status_M109' => $this->Status_M109,
            'Status_M110' => $this->Status_M110,
            'Status_M111' => $this->Status_M111,
            'Status_M112' => $this->Status_M112,
            'Status_M113' => $this->Status_M113,
            'Status_M114' => $this->Status_M114,
            'Status_M115' => $this->Status_M115,
            'Status_M116' => $this->Status_M116,
            'Status_M117' => $this->Status_M117,
            'Status_M118' => $this->Status_M118,
            'Status_M119' => $this->Status_M119,
            'Status_M120' => $this->Status_M120,
            'Status_M121' => $this->Status_M121,
            'Status_M122' => $this->Status_M122,
            'Status_M123' => $this->Status_M123,
            'Status_M124' => $this->Status_M124,
            'Status_M125' => $this->Status_M125,
            'Status_M126' => $this->Status_M126,
            'Status_M127' => $this->Status_M127,
            'Status_M128' => $this->Status_M128,
            'Status_M129' => $this->Status_M129,
            'Status_M130' => $this->Status_M130,
            'Status_M131' => $this->Status_M131,
            'Status_M132' => $this->Status_M132,
            'Status_M133' => $this->Status_M133,
            'Status_M134' => $this->Status_M134,
            'Status_M135' => $this->Status_M135,
            'Status_M136' => $this->Status_M136,
            'Status_M137' => $this->Status_M137,
            'Status_M138' => $this->Status_M138,
            'Status_M139' => $this->Status_M139,
        ]);

        $query->andFilterWhere(['like', 'Nome da Planta', $this->Nome da Planta])
            ->andFilterWhere(['like', 'IP da Planta', $this->IP da Planta])
            ->andFilterWhere(['like', 'Entrada 0', $this->Entrada 0])
            ->andFilterWhere(['like', 'Entrada 1', $this->Entrada 1])
            ->andFilterWhere(['like', 'Entrada 2', $this->Entrada 2])
            ->andFilterWhere(['like', 'Entrada 3', $this->Entrada 3])
            ->andFilterWhere(['like', 'Entrada 4', $this->Entrada 4])
            ->andFilterWhere(['like', 'Entrada 5', $this->Entrada 5])
            ->andFilterWhere(['like', 'Entrada 6', $this->Entrada 6])
            ->andFilterWhere(['like', 'Entrada 7', $this->Entrada 7])
            ->andFilterWhere(['like', 'Entrada 8', $this->Entrada 8])
            ->andFilterWhere(['like', 'Entrada 9', $this->Entrada 9])
            ->andFilterWhere(['like', 'Entrada 10', $this->Entrada 10])
            ->andFilterWhere(['like', 'Entrada 11', $this->Entrada 11])
            ->andFilterWhere(['like', 'Entrada 12', $this->Entrada 12])
            ->andFilterWhere(['like', 'Entrada 13', $this->Entrada 13])
            ->andFilterWhere(['like', 'Entrada 14', $this->Entrada 14])
            ->andFilterWhere(['like', 'Entrada 15', $this->Entrada 15])
            ->andFilterWhere(['like', 'Entrada 16', $this->Entrada 16])
            ->andFilterWhere(['like', 'Entrada 17', $this->Entrada 17])
            ->andFilterWhere(['like', 'Entrada 18', $this->Entrada 18])
            ->andFilterWhere(['like', 'Entrada 19', $this->Entrada 19])
            ->andFilterWhere(['like', 'Saída 0', $this->Saída 0])
            ->andFilterWhere(['like', 'Saída 1', $this->Saída 1])
            ->andFilterWhere(['like', 'Saída 2', $this->Saída 2])
            ->andFilterWhere(['like', 'Saída 3', $this->Saída 3])
            ->andFilterWhere(['like', 'Saída 4', $this->Saída 4])
            ->andFilterWhere(['like', 'Saída 5', $this->Saída 5])
            ->andFilterWhere(['like', 'Saída 6', $this->Saída 6])
            ->andFilterWhere(['like', 'Saída 7', $this->Saída 7])
            ->andFilterWhere(['like', 'Saída 8', $this->Saída 8])
            ->andFilterWhere(['like', 'Saída 9', $this->Saída 9])
            ->andFilterWhere(['like', 'Saída 10', $this->Saída 10])
            ->andFilterWhere(['like', 'Saída 11', $this->Saída 11])
            ->andFilterWhere(['like', 'Saída 12', $this->Saída 12])
            ->andFilterWhere(['like', 'Saída 13', $this->Saída 13])
            ->andFilterWhere(['like', 'Saída 14', $this->Saída 14])
            ->andFilterWhere(['like', 'Saída 15', $this->Saída 15])
            ->andFilterWhere(['like', 'Saída 16', $this->Saída 16])
            ->andFilterWhere(['like', 'Saída 17', $this->Saída 17])
            ->andFilterWhere(['like', 'Saída 18', $this->Saída 18])
            ->andFilterWhere(['like', 'Saída 19', $this->Saída 19]);

        return $dataProvider;
    }
}
