<?php

namespace app\controllers;

use Yii;
use app\models\Plants;
use app\models\PlantsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PlantsController implements the CRUD actions for Plants model.
 */
class PlantsController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Plants models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PlantsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Plants model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Plants model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Plants();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->Id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Plants model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->Id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }


     /**
     * teste de virtualização
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * 
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionVirtualizar($id)
    {
        $model = $this->findModel($id); 

        
        return $this->render('virtualizar', [
            'model' => $model,
        ]);
        
    }

    /**
     * Supervisiona a planta escolhida.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionSupervise($id)
    {
        $model = $this->findModel($id); 

        
        return $this->render('supervisao', [
            'model' => $model,
        ]);
    }
//
    public function actionCriarposto($id)
    {
        $model = $this->findModel($id); 

        
        return $this->render('postos', [
            'model' => $model,
        ]);
    }
//
public function actionCriarposto2($id)
{
    $model = $this->findModel($id); 

    
    return $this->render('postos2', [
        'model' => $model,
    ]);
}
    /**
     * Deletes an existing Plants model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Plants model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Plants the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Plants::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
