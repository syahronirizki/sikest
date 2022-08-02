<?php

namespace app\controllers;

use app\models\Pasien;
use Yii;

class ChartController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $psi = Yii::$app->db->createCommand('SELECT *, count(Jenis_Kelamin) AS Gender FROM `pasien` GROUP BY Jenis_Kelamin')
        ->queryAll();
        return $this->render('index', compact("psi"));
    }

}
