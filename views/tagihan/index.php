<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Tagihan;
use yii\grid\ActionColumn;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TagihanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tagihan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tagihan-index">
    <br>

    <p>
        <?= Html::a('Tambah Tagihan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_tagihan',
            // 'id_pasien',
            'pasien.nama_pasien',
            // 'id_obat',
            'obatku.nama_obat',
            // 'id_tindakan',
            'status.tindakan',
            'status_pembayaran',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Tagihan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_tagihan' => $model->id_tagihan]);
                }
            ],
        ],
    ]); ?>


</div>