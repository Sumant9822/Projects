<?php

namespace frontend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use yii\data\ActiveDataProvider;
use frontend\models\AdminEmployee;
use frontend\models\EmployeeSearch;

class EmployeeController extends \yii\web\Controller
{
    public function actionCreate()
    {
      $admemp = new AdminEmployee();
      if ($admemp->load(Yii::$app->request->post())) {
        $admemp->save();
        return $this->redirect(['index']);
      }
        return $this->render('create',['admemp'=>$admemp]);
    }

    public function actionDelete($id)
    {
      $admemp = AdminEmployee::findOne($id)->delete();
      if ($admemp) {
        return $this->redirect(['index']);
      }
        return $this->render('delete');
    }

    public function actionUpdate($id)
    {
      $admemp = AdminEmployee::findOne($id);
      if ($admemp->load(Yii::$app->request->post()) && $admemp->save()) {
        return $this->redirect(['index','id'=>$admemp->emp_id]);
      }
        return $this->render('update',['admemp'=>$admemp]);
    }

    public function actionIndex()
    {
      /*
      $query = AdminEmployee::find()->addOrderBy('emp_id');
      $dataProvider = new ActiveDataProvider([
        'query'=>$query,
      ]);
        return $this->render('index',[
          'dataProvider' => $dataProvider,
        ]);*/

        $searchModel = new EmployeeSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

}
