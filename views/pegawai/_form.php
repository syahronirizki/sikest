<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pegawai */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pegawai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_pegawai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jk_pegawai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_pegawai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'divisi_pegawai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'level_pegawai')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
