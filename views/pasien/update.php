<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pasien */

$this->title = 'Update Data Pasien: ' . $model->nama_pasien;
$this->params['breadcrumbs'][] = ['label' => 'Pasien', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_pasien, 'url' => ['view', 'id_pasien' => $model->id_pasien]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pasien-update">
    <!-- 
    <h1><?= Html::encode($this->title) ?></h1> -->

    <br>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>