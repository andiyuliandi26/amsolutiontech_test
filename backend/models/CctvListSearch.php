<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CctvList;

/**
 * CctvListSearch represents the model behind the search form about `app\models\CctvList`.
 */
class CctvListSearch extends CctvList
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_list', 'id_kategori', 'id_merk', 'id_series', 'id_resolution', 'id_jenis', 'id_status'], 'integer'],
            [['type', 'model', 'fitur', 'spesifikasi'], 'safe'],
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
        $query = CctvList::find();

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
            'id_list' => $this->id_list,
            'id_kategori' => $this->id_kategori,
            'id_merk' => $this->id_merk,
            'id_series' => $this->id_series,
            'id_resolution' => $this->id_resolution,
            'id_jenis' => $this->id_jenis,
            
            'id_status' => $this->id_status,
        ]);

        $query->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'model', $this->model])
            ->andFilterWhere(['like', 'fitur', $this->fitur])
            ->andFilterWhere(['like', 'spesifikasi', $this->spesifikasi]);

        return $dataProvider;
    }
}
