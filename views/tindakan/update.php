<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tindakan */

$this->title = 'Update Data Tindakan: ' . $model->tindakan;
$this->params['breadcrumbs'][] = ['label' => 'Tindakan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tindakan, 'url' => ['view', 'id_tindakan' => $model->id_tindakan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tindakan-update">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <br>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>