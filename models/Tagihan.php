<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tagihan".
 *
 * @property int $id_tagihan
 * @property int $id_pasien
 * @property int $id_obat
 * @property int $id_tindakan
 * @property string $status_pembayaran
 */
class Tagihan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tagihan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pasien', 'id_obat', 'id_tindakan', 'status_pembayaran'], 'required'],
            [['id_pasien', 'id_obat', 'id_tindakan'], 'integer'],
            [['status_pembayaran'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tagihan' => 'Id Tagihan',
            'id_pasien' => 'Nama Pasien',
            'id_obat' => 'Obat',
            'id_tindakan' => 'Tindakan',
            'status_pembayaran' => 'Status Pembayaran',
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
