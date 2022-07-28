<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Wilayah;

/**
 * WilayahSearch represents the model behind the search form of `app\models\Wilayah`.
 */
class WilayahSearch extends Wilayah
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_wilayah'], 'integer'],
            [['nama_provinsi'], 'safe'],
            [['nama_kota'], 'safe'],
            [['nama_kecamatan'], 'safe'],
            [['nama_kelurahan'], 'safe'],
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
        $query = Wilayah::find();

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
            'id_wilayah' => $this->id_wilayah,
        ]);

        $query->andFilterWhere(['like', 'nama_provinsi', $this->nama_provinsi]);
        $query->andFilterWhere(['like', 'nama_kota', $this->nama_kota]);
        $query->andFilterWhere(['like', 'nama_kecamatan', $this->nama_kecamatan]);
        $query->andFilterWhere(['like', 'nama_kelurahan', $this->nama_kelurahan]);

        return $dataProvider;
    }
}
