<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Obat */

$this->title = 'Update Data Obat: ' . $model->nama_obat;
$this->params['breadcrumbs'][] = ['label' => 'Obat', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_obat, 'url' => ['view', 'id_obat' => $model->id_obat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="obat-update">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <br>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>