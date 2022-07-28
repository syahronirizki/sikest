<?php

namespace app\models;

use Yii;
use app\models\Obat;
/**
 * This is the model class for table "penanganan_pasien".
 *
 * @property int $id_penanganan
 * @property string $tgl_penanganan
 * @property string $nama_pasien
 * @property string $poliklinik
 * @property string $status_berobat
 * @property string $keluhan
 * @property string $obat
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
            [['tgl_penanganan', 'nama_pasien', 'poliklinik', 'status_berobat', 'keluhan', 'obat'], 'required'],
            [['tgl_penanganan', 'nama_pasien', 'poliklinik', 'status_berobat', 'keluhan', 'obat'], 'string', 'max' => 100],
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
            'nama_pasien' => 'Nama Pasien',
            'poliklinik' => 'Poliklinik',
            'status_berobat' => 'Status Berobat',
            'keluhan' => 'Keluhan',
            'obat' => 'Obat',
        ];
    }

        public function getObatku()
        {
            return $this->hasOne(Obat::className(), ['obat' => 'id_obat']);
        }
}
