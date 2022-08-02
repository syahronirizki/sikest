<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tagihan */

$this->title = 'Update Status Tagihan: ' . $model->pasien->nama_pasien;
$this->params['breadcrumbs'][] = ['label' => 'Tagihan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pasien->nama_pasien, 'url' => ['view', 'id_tagihan' => $model->id_tagihan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tagihan-update">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <br>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>