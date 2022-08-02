<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PenangananPasien;

/**
 * PenangananPasienSearch represents the model behind the search form of `app\models\PenangananPasien`.
 */
class PenangananPasienSearch extends PenangananPasien
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_penanganan', 'id_pasien', 'id_tindakan', 'id_obat'], 'integer'],
            [['tgl_penanganan', 'poliklinik', 'keluhan'], 'safe'],
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
        $query = PenangananPasien::find();

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
            'id_penanganan' => $this->id_penanganan,
            'id_pasien' => $this->id_pasien,
            'id_tindakan' => $this->id_tindakan,
            'id_obat' => $this->id_obat,
        ]);

        $query->andFilterWhere(['like', 'tgl_penanganan', $this->tgl_penanganan])
            ->andFilterWhere(['like', 'poliklinik', $this->poliklinik])
            ->andFilterWhere(['like', 'keluhan', $this->keluhan]);

        return $dataProvider;
    }
}
