<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tagihan".
 *
 * @property int $id_tagihan
 * @property string $nama_pasien
 * @property string $namaitem1
 * @property string $hargaitem1
 * @property string $namaitem2
 * @property string $hargaitem2
 * @property string $totalharga
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
            [['nama_pasien', 'namaitem1', 'hargaitem1', 'namaitem2', 'hargaitem2', 'totalharga', 'status_pembayaran'], 'required'],
            [['nama_pasien', 'namaitem1', 'hargaitem1', 'namaitem2', 'hargaitem2', 'totalharga'], 'string', 'max' => 100],
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
            'nama_pasien' => 'Nama Pasien',
            'namaitem1' => 'Nama Item 1',
            'hargaitem1' => 'Harga Item 1',
            'namaitem2' => 'Nama Item 2',
            'hargaitem2' => 'Harga Item 2',
            'totalharga' => 'Total Harga',
            'status_pembayaran' => 'Status Pembayaran',
        ];
    }
}
