<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pasien */

$this->title = 'Tambah Data Pasien';
$this->params['breadcrumbs'][] = ['label' => 'Pasien', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasien-create">
    <!-- 
    <h1><?= Html::encode($this->title) ?></h1> -->

    <br>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>