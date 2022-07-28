<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pasien".
 *
 * @property int $id_pasien
 * @property string $tgl_daftar
 * @property string $nama_pasien
 * @property string $no_ktp
 * @property string $alamat_pasien
 * @property string $kota_pasien
 * @property string $Jenis_Kelamin
 * @property int $no_Telp
 */
class Pasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_daftar', 'nama_pasien', 'no_ktp', 'alamat_pasien', 'kota_pasien', 'Jenis_Kelamin', 'no_Telp'], 'required'],
            [['tgl_daftar'], 'safe'],
            [['nama_pasien'], 'string', 'max' => 256],
            [['no_ktp', 'alamat_pasien', 'kota_pasien', 'Jenis_Kelamin', 'no_Telp'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pasien' => 'Id Pasien',
            'tgl_daftar' => 'Tgl Daftar',
            'nama_pasien' => 'Nama Pasien',
            'no_ktp' => 'No Ktp',
            'alamat_pasien' => 'Alamat Pasien',
            'kota_pasien' => 'Asal Kota Pasien',
            'Jenis_Kelamin' => 'Jenis Kelamin',
            'no_Telp' => 'No Telp',
        ];
    }
}
