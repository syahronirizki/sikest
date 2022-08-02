<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PenangananPasien */

$this->title = $model->pasien->nama_pasien;
$this->params['breadcrumbs'][] = ['label' => 'Penanganan Pasien', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penanganan-pasien-view">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <br>

    <p>
        <!-- <?= Html::a('Update', ['update', 'id_penanganan' => $model->id_penanganan], ['class' => 'btn btn-primary']) ?> -->
        <?= Html::a('Delete', ['delete', 'id_penanganan' => $model->id_penanganan], [
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
            // 'id_penanganan',
            'tgl_penanganan',
            // 'nama_pasien',
            'pasien.nama_pasien',
            'poliklinik',
            // 'status_berobat',
            'keluhan',
            'obatku.nama_obat',
            'status.tindakan',
            //'obat',
        ],
    ]) ?>

</div>