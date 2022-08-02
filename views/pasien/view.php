<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Pasien */

$this->title = $model->nama_pasien;
$this->params['breadcrumbs'][] = ['label' => 'Pasien', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pasien-view">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <br>

    <p>
        <?= Html::a('Delete', ['delete', 'id_pasien' => $model->id_pasien], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id_pasien',
            'tgl_daftar',
            'nama_pasien',
            'no_ktp',
            'alamat_pasien',
            'kota_pasien',
            'Jenis_Kelamin',
            'no_Telp',
        ],
    ]) ?>

</div>