<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wilayah".
 *
 * @property int $id_wilayah
 * @property string $nama_provinsi
 * @property string $nama_kota
 * @property string $nama_kecamatan
 * @property string $nama_kelurahan
 */
class Wilayah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wilayah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_provinsi'], 'required'],
            [['nama_provinsi'], 'string', 'max' => 100],
            [['nama_kota'], 'string', 'max' => 100],
            [['nama_kecamatan'], 'string', 'max' => 100],
            [['nama_kelurahan'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_wilayah' => 'Id Wilayah',
            'nama_provinsi' => 'Nama Provinsi',
            'nama_kota' => 'Nama Kota',
            'nama_kecamatan' => 'Nama Kecamatan',
            'nama_kelurahan' => 'Nama Kelurahan',
        ];
    }
}
