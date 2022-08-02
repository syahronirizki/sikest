<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TagihanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tagihan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_tagihan') ?>

    <?= $form->field($model, 'id_pasien') ?>

    <?= $form->field($model, 'id_obat') ?>

    <?= $form->field($model, 'id_tindakan') ?>

    <?= $form->field($model, 'status_pembayaran') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
