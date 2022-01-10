<?php
namespace frontend\controllers;
use Yii;
use yii\web\Response;
use yii\web\Controller;
use yii\data\Pagination;
use frontend\models\Series;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\rest\ActiveController;

class SeriesController extends ActiveController
{
    

    public $modelClass = 'frontend\models\Series';
    public function actions()
    {
        
      $actions = parent::actions();
      //unset($actions['index']);
  
      $actions['index']['dataFilter'] = [
          'class' => \yii\data\ActiveDataFilter::class,
          'searchModel' => 'frontend\models\Series',
      ];
  
      return $actions;  
    }
    public function actionIndex(){
      //create query
       $query = Series::find();
       $dataProvider = new ActiveDataProvider(['query' => $query,]);
       return $this->render('index',['dataProvider'=>$dataProvider]);   
   }

   public function actionCreate(){
      $series = new Series();

      if($series->load(Yii::$app->request->post())){
          if($series->validate()){
              //save to db
              $series->save();
              //show message
              yii::$app->getSession()->setFlash('success','Series added successfully');
              return $this->redirect('index.php?r=series');
          }
      }

      return $this->render('create',['series'=>$series]);
  }

  // public function actionView($id) {
  //     $employee = Employee::find()
  //                ->where(['emp_id' => $id ])
  //                ->one();
 
  //        return $this->render('view', ['employee' => $employee] );
  //    }
 
  
  public function actionUpdate($id){
      $series = Series::findOne($id);

      if($series->load(Yii::$app->request->post())&& $series->save()){
              //show message
              yii::$app->getSession()->setFlash('success','Series Updated successfully');
              return $this->redirect(['index','series'=>$series->id]);
          }
          return $this->render('update',['series'=>$series]);
      }
  
  public function actionDelete($id){
      //delete tourist
      $series = Series::findOne($id)->delete();

      if($series){
          //show message
          yii::$app->getSession()->setFlash('success','Series Deleted successfully');
          return $this->redirect('index.php?r=series');

      }
            
  } 


}
