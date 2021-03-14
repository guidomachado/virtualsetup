<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Plants;

/**
 * PlantsControlSearch represents the model behind the search form of `app\models\Plants`.
 */
class PlantsControlSearch extends Plants
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id', 'Porta_de_Acesso', 'Status_M100', 'Status_M101', 'Status_M102', 'Status_M103', 'Status_M104', 'Status_M105', 'Status_M106', 'Status_M107', 'Status_M108', 'Status_M109', 'Status_M110', 'Status_M111', 'Status_M112', 'Status_M113', 'Status_M114', 'Status_M115', 'Status_M116', 'Status_M117', 'Status_M118', 'Status_M119', 'Status_M120', 'Status_M121', 'Status_M122', 'Status_M123', 'Status_M124', 'Status_M125', 'Status_M126', 'Status_M127', 'Status_M128', 'Status_M129', 'Status_M130', 'Status_M131', 'Status_M132', 'Status_M133', 'Status_M134', 'Status_M135', 'Status_M136', 'Status_M137', 'Status_M138', 'Status_M139', 'aprendeu_planta', 'Id_control'], 'integer'],
            [['Nome_da_Planta', 'IP_da_Planta', 'Entrada_0', 'Entrada_1', 'Entrada_2', 'Entrada_3', 'Entrada_4', 'Entrada_5', 'Entrada_6', 'Entrada_7', 'Entrada_8', 'Entrada_9', 'Entrada_10', 'Entrada_11', 'Entrada_12', 'Entrada_13', 'Entrada_14', 'Entrada_15', 'Entrada_16', 'Entrada_17', 'Entrada_18', 'Entrada_19', 'Saída_0', 'Saída_1', 'Saída_2', 'Saída_3', 'Saída_4', 'Saída_5', 'Saída_6', 'Saída_7', 'Saída_8', 'Saída_9', 'Saída_10', 'Saída_11', 'Saída_12', 'Saída_13', 'Saída_14', 'Saída_15', 'Saída_16', 'Saída_17', 'Saída_18', 'Saída_19'], 'safe'],
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
            'Porta_de_Acesso' => $this->Porta_de_Acesso,
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
            'aprendeu_planta' => $this->aprendeu_planta,
            'Id_control' => $this->Id_control,
        ]);

        $query->andFilterWhere(['like', 'Nome_da_Planta', $this->Nome_da_Planta])
            ->andFilterWhere(['like', 'IP_da_Planta', $this->IP_da_Planta])
            ->andFilterWhere(['like', 'Entrada_0', $this->Entrada_0])
            ->andFilterWhere(['like', 'Entrada_1', $this->Entrada_1])
            ->andFilterWhere(['like', 'Entrada_2', $this->Entrada_2])
            ->andFilterWhere(['like', 'Entrada_3', $this->Entrada_3])
            ->andFilterWhere(['like', 'Entrada_4', $this->Entrada_4])
            ->andFilterWhere(['like', 'Entrada_5', $this->Entrada_5])
            ->andFilterWhere(['like', 'Entrada_6', $this->Entrada_6])
            ->andFilterWhere(['like', 'Entrada_7', $this->Entrada_7])
            ->andFilterWhere(['like', 'Entrada_8', $this->Entrada_8])
            ->andFilterWhere(['like', 'Entrada_9', $this->Entrada_9])
            ->andFilterWhere(['like', 'Entrada_10', $this->Entrada_10])
            ->andFilterWhere(['like', 'Entrada_11', $this->Entrada_11])
            ->andFilterWhere(['like', 'Entrada_12', $this->Entrada_12])
            ->andFilterWhere(['like', 'Entrada_13', $this->Entrada_13])
            ->andFilterWhere(['like', 'Entrada_14', $this->Entrada_14])
            ->andFilterWhere(['like', 'Entrada_15', $this->Entrada_15])
            ->andFilterWhere(['like', 'Entrada_16', $this->Entrada_16])
            ->andFilterWhere(['like', 'Entrada_17', $this->Entrada_17])
            ->andFilterWhere(['like', 'Entrada_18', $this->Entrada_18])
            ->andFilterWhere(['like', 'Entrada_19', $this->Entrada_19])
            ->andFilterWhere(['like', 'Saída_0', $this->Saída_0])
            ->andFilterWhere(['like', 'Saída_1', $this->Saída_1])
            ->andFilterWhere(['like', 'Saída_2', $this->Saída_2])
            ->andFilterWhere(['like', 'Saída_3', $this->Saída_3])
            ->andFilterWhere(['like', 'Saída_4', $this->Saída_4])
            ->andFilterWhere(['like', 'Saída_5', $this->Saída_5])
            ->andFilterWhere(['like', 'Saída_6', $this->Saída_6])
            ->andFilterWhere(['like', 'Saída_7', $this->Saída_7])
            ->andFilterWhere(['like', 'Saída_8', $this->Saída_8])
            ->andFilterWhere(['like', 'Saída_9', $this->Saída_9])
            ->andFilterWhere(['like', 'Saída_10', $this->Saída_10])
            ->andFilterWhere(['like', 'Saída_11', $this->Saída_11])
            ->andFilterWhere(['like', 'Saída_12', $this->Saída_12])
            ->andFilterWhere(['like', 'Saída_13', $this->Saída_13])
            ->andFilterWhere(['like', 'Saída_14', $this->Saída_14])
            ->andFilterWhere(['like', 'Saída_15', $this->Saída_15])
            ->andFilterWhere(['like', 'Saída_16', $this->Saída_16])
            ->andFilterWhere(['like', 'Saída_17', $this->Saída_17])
            ->andFilterWhere(['like', 'Saída_18', $this->Saída_18])
            ->andFilterWhere(['like', 'Saída_19', $this->Saída_19]);

        return $dataProvider;
    }
}
