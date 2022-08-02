<?php

namespace app\controllers;

use app\models\PenangananPasien;
use app\models\PenangananPasienSearch;
use app\models\Tagihan;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PenangananPasienController implements the CRUD actions for PenangananPasien model.
 */
class PenangananPasienController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all PenangananPasien models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PenangananPasienSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PenangananPasien model.
     * @param int $id_penanganan Id Penanganan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_penanganan)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_penanganan),
        ]);
    }

    /**
     * Creates a new PenangananPasien model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PenangananPasien();
        $modelTagihan = new Tagihan();
        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_penanganan' => $model->id_penanganan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
            'modelTagihan' => $modelTagihan
        ]);
    }

    /**
     * Updates an existing PenangananPasien model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_penanganan Id Penanganan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_penanganan)
    {
        $model = $this->findModel($id_penanganan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_penanganan' => $model->id_penanganan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PenangananPasien model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_penanganan Id Penanganan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_penanganan)
    {
        $this->findModel($id_penanganan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PenangananPasien model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_penanganan Id Penanganan
     * @return PenangananPasien the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_penanganan)
    {
        if (($model = PenangananPasien::findOne(['id_penanganan' => $id_penanganan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
