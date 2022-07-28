<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tagihan */

$this->title = 'Update Tagihan: ' . $model->id_tagihan;
$this->params['breadcrumbs'][] = ['label' => 'Tagihan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tagihan, 'url' => ['view', 'id_tagihan' => $model->id_tagihan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tagihan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
