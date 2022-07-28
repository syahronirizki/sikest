<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Wilayah */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wilayah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_provinsi')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'nama_kota')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'nama_kecamatan')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'nama_kelurahan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
