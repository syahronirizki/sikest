<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PasienSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pendaftaran Pasien';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasien-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <br>
    <p>
        <?= Html::a('Tambah Data Pasien', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_pasien',
            'tgl_daftar',
            'nama_pasien',
            'no_ktp',
            'alamat_pasien',
            // 'kota_pasien',
            'Jenis_Kelamin',
            // 'no_Telp',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_pasien' => $model->id_pasien]);
                },
            ],
        ],
    ]); ?>


</div>