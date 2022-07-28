<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PenangananPasien */

$this->title = 'Create Penanganan Pasien';
$this->params['breadcrumbs'][] = ['label' => 'Penanganan Pasien', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penanganan-pasien-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
