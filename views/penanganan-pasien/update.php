<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PenangananPasien */

$this->title = 'Update Penanganan Pasien: ' . $model->pasien->nama_pasien;
$this->params['breadcrumbs'][] = ['label' => 'Penanganan Pasien', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pasien->nama_pasien, 'url' => ['view', 'id_penanganan' => $model->id_penanganan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penanganan-pasien-update">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <br>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>