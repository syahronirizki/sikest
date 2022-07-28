<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property int $id_pegawai
 * @property string $nama_pegawai
 * @property string $jk_pegawai
 * @property string $alamat_pegawai
 * @property string $divisi_pegawai
 * @property string $level_pegawai
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pegawai', 'jk_pegawai', 'alamat_pegawai', 'divisi_pegawai', 'level_pegawai'], 'required'],
            [['nama_pegawai', 'jk_pegawai', 'divisi_pegawai', 'level_pegawai'], 'string', 'max' => 100],
            [['alamat_pegawai'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pegawai' => 'Id Pegawai',
            'nama_pegawai' => 'Nama Pegawai',
            'jk_pegawai' => 'JK',
            'alamat_pegawai' => 'Alamat Pegawai',
            'divisi_pegawai' => 'Divisi Pegawai',
            'level_pegawai' => 'Level Pegawai',
        ];
    }
}
