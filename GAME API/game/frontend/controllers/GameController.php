<?php

namespace frontend\controllers;
use Yii;
use yii\web\Response;
use yii\web\Controller;
use yii\data\Pagination;
use frontend\models\Game;
use frontend\models\Series;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\rest\ActiveController;
// class GameController extends \yii\web\Controller
class GameController extends ActiveController
{
    public $modelClass = 'frontend\models\Game';
    public function actions()
    {
      $actions = parent::actions();
      //unset($actions['index']);
  
      $actions['index']['dataFilter'] = [
          'class' => \yii\data\ActiveDataFilter::class,
          //'searchModel' => 'app\models\BookFilter',
          'searchModel' => 'frontend\models\Game',
      ];
  
      return $actions;  
      
    }
    
    public function actionIndex(){
        //create query
         $query = Game::find();
         $dataProvider = new ActiveDataProvider(['query' => $query,]);
         return $this->render('index',['dataProvider'=>$dataProvider]);   
     }

     public function actionCreate(){
        $game = new Game();

        if($game->load(Yii::$app->request->post())){
            if($game->validate()){
                //save to db
                $game->save();
                //show message
                yii::$app->getSession()->setFlash('success','Game added successfully');
                return $this->redirect('index.php?r=game');
            }
        }

        return $this->render('create',['game'=>$game]);
    }

    // public function actionView($id) {
    //     $employee = Employee::find()
    //                ->where(['emp_id' => $id ])
    //                ->one();
   
    //        return $this->render('view', ['employee' => $employee] );
    //    }
   
    
    public function actionUpdate($id){
        $game = Game::findOne($id);

        if($game->load(Yii::$app->request->post())&& $game->save()){
                //show message
                yii::$app->getSession()->setFlash('success','Game Updated successfully');
                return $this->redirect(['index','gameID'=>$game->gameID]);
            }
            return $this->render('update',['game'=>$game]);
        }
    
    public function actionDelete($id){
        //delete tourist
        $game = Game::findOne($id)->delete();

        if($game){
            //show message
            yii::$app->getSession()->setFlash('success','Game Deleted successfully');
            return $this->redirect('index.php?r=game');

        }
              
    } 

}
