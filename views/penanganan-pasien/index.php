<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\PenangananPasien;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PenangananPasienSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tindakan dan Obat Pasien';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penanganan-pasien-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <br>

    <p>
        <?= Html::a('Tambah Tindakan dan Obat Pasien', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_penanganan',
            'tgl_penanganan',
            // 'nama_pasien',
            'pasien.nama_pasien',
            'poliklinik',
            // 'status_berobat',
            'keluhan',
            'obatku.nama_obat',
            'status.tindakan',
            //'obat',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PenangananPasien $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_penanganan' => $model->id_penanganan]);
                },
                'template' => '{view} {delete}'
            ],
        ],
    ]); ?>


</div>