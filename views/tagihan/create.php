<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tagihan */

$this->title = 'Input Tagihan';
$this->params['breadcrumbs'][] = ['label' => 'Tagihan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tagihan-create">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <br>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>