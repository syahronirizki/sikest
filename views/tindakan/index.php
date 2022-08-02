<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TindakanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tindakan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tindakan-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <br>
    <p>
        <?= Html::a('Tambah Tindakan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_tindakan',
            'tindakan',
            'tarif',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_tindakan' => $model->id_tindakan]);
                }
            ],
        ],
    ]); ?>


</div>