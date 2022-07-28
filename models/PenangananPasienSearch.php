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
            [['id_penanganan'], 'integer'],
            [['tgl_penanganan', 'nama_pasien', 'poliklinik', 'status_berobat', 'keluhan', 'obat'], 'safe'],
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
        ]);

        $query->andFilterWhere(['like', 'tgl_penanganan', $this->tgl_penanganan])
            ->andFilterWhere(['like', 'nama_pasien', $this->nama_pasien])
            ->andFilterWhere(['like', 'poliklinik', $this->poliklinik])
            ->andFilterWhere(['like', 'status_berobat', $this->status_berobat])
            ->andFilterWhere(['like', 'keluhan', $this->keluhan])
            ->andFilterWhere(['like', 'obat', $this->obat]);
        return $dataProvider;
    }
}
