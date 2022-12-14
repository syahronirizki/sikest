<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use bootui\datepicker\Datepicker;

use function PHPSTORM_META\type;

/* @var $this yii\web\View */
/* @var $model app\models\Pasien */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pasien-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-3">
            <?=
            $form->field($model, 'tgl_daftar')->widget(
                Datepicker::className(),
                [
                    'format' => 'yyyy-MM-dd',
                    'autocomplete' => 'off',
                ],
            );
            ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'nama_pasien')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'no_ktp')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'alamat_pasien')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'kota_pasien')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?php
            echo $form->field($model, 'Jenis_Kelamin')->dropDownList(
                ['Pria' => 'Pria', 'Wanita' => 'Wanita']
            );
            ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'no_Telp')->textInput(['type' => 'number']) ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>