<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Wilayah */

$this->title = $model->id_wilayah;
$this->params['breadcrumbs'][] = ['label' => 'Wilayah', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="wilayah-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_wilayah' => $model->id_wilayah], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_wilayah' => $model->id_wilayah], [
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
            'id_wilayah',
            'nama_provinsi',
            'nama_kota',
            'nama_kecamatan',
            'nama_kelurahan',
        ],
    ]) ?>

</div>
