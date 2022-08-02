<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tagihan */

$this->title = $model->pasien->nama_pasien;
$this->params['breadcrumbs'][] = ['label' => 'Tagihan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tagihan-view">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <br>

    <p>
        <?= Html::a('Update', ['update', 'id_tagihan' => $model->id_tagihan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_tagihan' => $model->id_tagihan], [
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
            'pasien.nama_pasien',
            // 'id_obat',
            'obatku.nama_obat',
            // 'id_tindakan',
            'status.tindakan',
            'status_pembayaran',
        ],
    ]) ?>

</div>