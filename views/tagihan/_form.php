<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tagihan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tagihan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namaitem1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hargaitem1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namaitem2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hargaitem2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'totalharga')->textInput(['maxlength' => true]) ?>

    <?php
        echo $form->field($model, 'status_pembayaran')->dropDownList(
                    ['Lunas' => 'Lunas', 'Belum Lunas' => 'Belum Lunas']); 
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
