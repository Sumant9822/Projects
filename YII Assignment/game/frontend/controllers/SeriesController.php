<?php
namespace frontend\controllers;
use Yii;
use yii\web\Response;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Series;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;


class SeriesController extends \yii\web\Controller
{
    
    public function actionIndex()
    {
        //query
        $query = Series::find();

        $pagination = new  Pagination([
            'defaultPageSize' => 4,
            'totalCount'      => $query->count()
        ]);


        $series = $query->orderBy('name')   //name coloumn will be displayed
                            ->offset($pagination->offset)
                            ->limit($pagination->limit)
                            ->all();

        return $this->render('index', [
            'series' => $series,
            'pagination' => $pagination
        ]);
    }


    public function actionCreate()
    {
        $series = new series();
        if ($series->load(Yii::$app->request->post())) {
            if ($series->validate()) {
                //save to db 
                $series->save(); 
                //show conformation
                yii::$app->getSession()->setFlash('msg', 'Series Added Successfully');
                return $this->redirect('index.php?r=series');
            }
        }
    
        return $this->render('create', [  'series' => $series  ]);
    }


}
