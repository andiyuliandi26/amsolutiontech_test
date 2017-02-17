<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Harga;

/**
 * HargaSearch represents the model behind the search form about `app\models\Harga`.
 */
class HargaSearch extends Harga
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_harga', 'id_list', 'id_pengali'], 'integer'],
            [['harga_dealer', 'harga_enduser'], 'number'],
            [['last_update'], 'safe'],
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
        $query = Harga::find();

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
            'id_harga' => $this->id_harga,
            'id_list' => $this->id_list,
            'harga_dealer' => $this->harga_dealer,
            'id_pengali' => $this->id_pengali,
            'harga_enduser' => $this->harga_enduser,
            'last_update' => $this->last_update,
        ]);

        return $dataProvider;
    }
}
