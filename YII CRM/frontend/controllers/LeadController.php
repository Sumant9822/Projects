<?php

namespace frontend\controllers;

use frontend\models\Leads;
use frontend\models\Customer;
use frontend\models\LeadSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LeadController implements the CRUD actions for Leads model.
 */
class LeadController extends Controller
{
    /**
     * @inheritDoc
     */
    // public function behaviors()
    // {
    //     return array_merge(
    //         parent::behaviors(),
    //         [
    //             'verbs' => [
    //                 'class' => VerbFilter::className(),
    //                 'actions' => [
    //                     'delete' => ['GET'],
    //                 ],
    //             ],
    //         ]
    //     );
    // }

    /**
     * Lists all Leads models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LeadSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Leads model.
     * @param string $lead_id Lead ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($lead_id),
        ]);
    }

    /**
     * Creates a new Leads model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Leads();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['index', 'lead_id' => $model->lead_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Leads model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $lead_id Lead ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = Leads::findOne($id);
       // echo "working";
       // $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()){
        //if ($model->load(Yii::$app->request->post()) && $model->save()) {
            
            //print_r($model);
            return $this->redirect(['index', 'lead_id' => $model->lead_id]);
            //return $this->redirect('view');
        }
            
              return $this->render('update', [
            'model' => $model
        ]); 
    }


    /**
     * Deletes an existing Leads model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $lead_id Lead ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionLink($id){
      
        $customer = new Customer();
        if ($customer->load($this->request->post()))
        {
          $customer->save();
          return $this->redirect(['index','cust_id'=>$customer->cust_id]);
        }
        return $this->render('link',['cust'=>$customer]);
  
     
      }

    /**
     * Finds the Leads model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $lead_id Lead ID
     * @return Leads the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Leads::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
