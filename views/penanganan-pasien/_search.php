<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PenangananPasienSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penanganan-pasien-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_penanganan') ?>

    <?= $form->field($model, 'tgl_penanganan') ?>

    <?= $form->field($model, 'nama_pasien') ?>

    <?= $form->field($model, 'poliklinik') ?>

    <?= $form->field($model, 'status_berobat') ?>

    <?php // echo $form->field($model, 'keluhan') ?>

    <?php // echo $form->field($model, 'obat') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
