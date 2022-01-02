<?php

namespace frontend\controllers;
use Yii;
use yii\web\Response;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Game;
use app\models\Series;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

class GameController extends \yii\web\Controller
{
 

    public function actionCreate()
    {
        $games = new Game();

        if ($games->load(Yii::$app->request->post())) {
            if ($games->validate()) {
                $games->save();
                yii::$app->getSession()->setFlash('msg', 'Game Added Successfully');
                return $this->redirect('index.php?r=game');
               
            }
        }
    
        return $this->render('create', [
            'games' => $games,
        ]);
    }
    

    public function actionDelete($id)
    {
        $games = Game::findOne($id);
          
            $games->delete();
                yii::$app->getSession()->setFlash('success', 'Deleted Successfully');
                return $this->redirect('index.php?r=game');
               
    }

    public function actionEdit($id)
    {
        $games = Game::findOne($id);
       
     
        if ($games->load(Yii::$app->request->post())) {
            if ($games->validate()) {
                $games->save();
                yii::$app->getSession()->setFlash('msg', 'Game Updated Successfully');
                return $this->redirect('index.php?r=game');
               
            }
        }
    
        return $this->render('edit', [
            'games' => $games,
        ]);
     }

    public function actionIndex($series = 0)
    {
         //query
         $query = Game::find();

         $pagination = new  Pagination([
             'defaultPageSize' => 8,
             'totalCount'      => $query->count()
         ]);
 
         if(!empty($series)){
         $games = $query->orderBy('created_at DESC')   
                             ->offset($pagination->offset)
                             ->where(['gseries' => $series ])
                             ->limit($pagination->limit)
                             ->all();
          } else {
            $games = $query->orderBy('created_at DESC')   
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
                                 }
 
         return $this->render('index', [
             'games' => $games,
             'pagination' => $pagination
         ]);
    }

}
