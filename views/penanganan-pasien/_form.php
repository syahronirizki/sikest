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

    <?= 
            $form->field($model, 'tgl_penanganan')->widget(Datepicker::className(), [
            'format' => 'yyyy-MM-dd',
            'autocomplete' => 'off',
            ],
        );

?>

    <?= $form->field($model, 'nama_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'poliklinik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_berobat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keluhan')->textInput(['maxlength' => true]) ?>

    <?php
        echo $form->field($model, 'obat')->dropDownList(
                    ['Kalpanax' => 'Kalpanax', 'Biogesic' => 'Biogesic', 'Cataflam' => 'Cataflam']); 
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
