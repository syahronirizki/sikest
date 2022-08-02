<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penanganan_pasien".
 *
 * @property int $id_penanganan
 * @property string $tgl_penanganan
 * @property int $id_pasien
 * @property string $poliklinik
 * @property int $id_tindakan
 * @property string $keluhan
 * @property int $id_obat
 */
class PenangananPasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penanganan_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_penanganan', 'id_pasien', 'poliklinik', 'id_tindakan', 'keluhan', 'id_obat'], 'required'],
            [['id_pasien', 'id_tindakan', 'id_obat'], 'integer'],
            [['tgl_penanganan', 'poliklinik', 'keluhan'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_penanganan' => 'Id Penanganan',
            'tgl_penanganan' => 'Tgl Penanganan',
            'id_pasien' => 'Nama Pasien',
            'poliklinik' => 'Poliklinik',
            'id_tindakan' => 'Tindakan',
            'keluhan' => 'Keluhan',
            'id_obat' => 'Obat',
        ];
    }

    public function getObatku()
    {
        return $this->hasOne(Obat::class, ['id_obat' => 'id_obat']);
    }

    public function getStatus()
    {
        return $this->hasOne(Tindakan::class, ['id_tindakan' => 'id_tindakan']);
    }

    public function getPasien()
    {
        return $this->hasOne(Pasien::class, ['id_pasien' => 'id_pasien']);
    }
}
