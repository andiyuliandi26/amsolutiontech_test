<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Detail;

/**
 * DetailSearch represents the model behind the search form about `app\models\Detail`.
 */
class DetailSearch extends Detail
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_detail', 'id_list', 'id_tipelensa'], 'integer'],
            [['fitur', 'input_output', 'modul_info', 'compression', 'SATA_interface', 'network_interface', 'output_support', 'indoor_outdoor', 'form_factor', 'power_supply', 'infrared', 'picture'], 'safe'],
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
        $query = Detail::find();

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
            'id_detail' => $this->id_detail,
            'id_list' => $this->id_list,
            'id_tipelensa' => $this->id_tipelensa,
        ]);

        $query->andFilterWhere(['like', 'fitur', $this->fitur])
            ->andFilterWhere(['like', 'input_output', $this->input_output])
            ->andFilterWhere(['like', 'modul_info', $this->modul_info])
            ->andFilterWhere(['like', 'compression', $this->compression])
            ->andFilterWhere(['like', 'SATA_interface', $this->SATA_interface])
            ->andFilterWhere(['like', 'network_interface', $this->network_interface])
            ->andFilterWhere(['like', 'output_support', $this->output_support])
            ->andFilterWhere(['like', 'indoor_outdoor', $this->indoor_outdoor])
            ->andFilterWhere(['like', 'form_factor', $this->form_factor])
            ->andFilterWhere(['like', 'power_supply', $this->power_supply])
            ->andFilterWhere(['like', 'infrared', $this->infrared])
            ->andFilterWhere(['like', 'picture', $this->picture]);

        return $dataProvider;
    }
}
