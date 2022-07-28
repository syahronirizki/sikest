<?php

use app\models\Obat;
use app\models\Pegawai;
use app\models\Tindakan;
use app\models\User;
use app\models\Wilayah;
use mdm\admin\models\User as ModelsUser;

$this->title = 'Dashboard Page';
$this->params['breadcrumbs'] = [['label' => $this->title]];
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-sm-6 col-12">
            <?= \hail812\adminlte\widgets\InfoBox::widget([
                'text' => 'Total Wilayah :',
                'number' => Wilayah::find()->count(),
                'icon' => 'fa fa-place-of-worship',
            ]) ?>
        </div>
        <div class="col-md-4 col-sm-6 col-12">
        <?= \hail812\adminlte\widgets\InfoBox::widget([
                'text' => 'Total User :',
                'number' => ModelsUser::find()->count(),
                'icon' => 'fa fa-user',
                ])?>
        </div>
        <div class="col-md-4 col-sm-6 col-12">
            <?= \hail812\adminlte\widgets\InfoBox::widget([
                'text' => 'Total Pegawai :',
                'number' => Pegawai::find()->count(),
                'icon' => 'fa fa-user-tie',
            ]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-6 col-12">
            <?= \hail812\adminlte\widgets\InfoBox::widget([
                'text' => 'Tindakan',
                'number' => Tindakan::find()->count(),
                'icon' => 'fa fa-exclamation',
            ]) ?>
        </div>
        <div class="col-md-6 col-sm-6 col-12">
        <?= \hail812\adminlte\widgets\InfoBox::widget([
                'text' => 'Total Obat :',
                'number' => Obat::find()->count(),
                'icon' => 'fa fa-pills',
                ])?>
        </div>
    </div>
</div>