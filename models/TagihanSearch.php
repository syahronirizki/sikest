<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tagihan;

/**
 * TagihanSearch represents the model behind the search form of `app\models\Tagihan`.
 */
class TagihanSearch extends Tagihan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_tagihan', 'id_pasien', 'id_obat', 'id_tindakan'], 'integer'],
            [['status_pembayaran'], 'safe'],
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
        $query = Tagihan::find();

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
            'id_tagihan' => $this->id_tagihan,
            'id_pasien' => $this->id_pasien,
            'id_obat' => $this->id_obat,
            'id_tindakan' => $this->id_tindakan,
        ]);

        $query->andFilterWhere(['like', 'status_pembayaran', $this->status_pembayaran]);

        return $dataProvider;
    }
}
