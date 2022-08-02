<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use bootui\datepicker\Datepicker;

use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\PenangananPasien */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penanganan-pasien-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-4">
            <?=
            $form->field($model, 'tgl_penanganan')->widget(
                Datepicker::className(),
                [
                    'format' => 'dd-MM-yyyy',
                    'options' => ['placeholder' => 'Tanggal Penanganan', 'autocomplete' => 'off'],
                ],
            );
            ?>
        </div>
        <div class="col-md-4">
            <?php
            $dataPost = ArrayHelper::map(\app\models\Pasien::find()->asArray()->all(), 'id_pasien', 'nama_pasien');
            echo $form->field($model, 'id_pasien')->dropDownList($dataPost, ['id_pasien' => 'nama_pasien']);
            ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'poliklinik')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'keluhan')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?php
            $dataPost = ArrayHelper::map(\app\models\Obat::find()->asArray()->all(), 'id_obat', 'nama_obat');
            echo $form->field($model, 'id_obat')->dropDownList($dataPost, ['id_obat' => 'nama_obat']);
            ?>
        </div>
        <div class="col-md-4">
            <?php
            $dataPost = ArrayHelper::map(\app\models\Tindakan::find()->asArray()->all(), 'id_tindakan', 'tindakan');
            echo $form->field($model, 'id_tindakan')->dropDownList($dataPost, ['id_tindakan' => 'tindakan']);
            ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>