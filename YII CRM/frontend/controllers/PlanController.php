<?php

namespace frontend\controllers;

use frontend\models\Plan;
use frontend\models\LeadSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use yii\data\ActiveDataProvider;

class PlanController extends \yii\web\Controller
{
    public function actionAdd()
    {
        return $this->render('add');
    }

    public function actionDelete()
    {
        return $this->render('delete');
    }

    public function actionIndex()
    {
        $query = Plan::find();
          
          // create query
        $dataProvider = new ActiveDataProvider([
          //'pagination' => ['pageSize' = 5],
          'query' => $query,
          
        ]);
        return $this->render('index',[
            'dataProvider' => $dataProvider
          ]);
          

        }


}
