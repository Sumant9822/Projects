<?php

namespace frontend\models;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Game;
use frontend\models\Series;
use frontend\models\GameFilter;
class GameSearch extends Game {
    public $gseries;
    public static function tableName()
    {
        return 'games';
    }

   
    public function rules()
    {
        return [
            [[ 'gseries','gname', 'gspace', 'gdeveloper', 'gpublisher', 'ggenres'], 'required'],
            // [['gseries','gname', 'gspace', 'gdeveloper', 'gpublisher', 'ggenres','created_at'], 'safe'],
            [['gname', 'gdeveloper', 'gpublisher', 'ggenres'], 'string'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {

        
       $filter = new ActiveDataFilter([
         'searchModel' => 'app\models\GameFilter'
      ]);
      
         $filterCondition = null;
      

    if ($filter->load(\Yii::$app->request->get())) { 
        $filterCondition = $filter->build();
       if ($filterCondition === false) {

     return $filter;
      }
       }
       
      $query = Game::find();
        // add join query
        $query->joinWith(['series']);
        $query->andFilterWhere([
            'series.id' => $this->gseries, 
        ]);
      
     
       if ($filterCondition !== null) {
    $query->andWhere($filterCondition);
    }
    //  echo $query->createCommand()->rawSql;
    //    die;
    
  return new ActiveDataProvider([
  'query' => $query,
]);
        $this->load($params);
        $query = Game::find();
      

        // $dataProvider = new ActiveDataProvider([
        //     'query' => $query,
        // ]);

        $dataProvider->setSort([
            'attributes' => [
                'gameID',
                'admin_id',
                'gname',
                'gseries' => [
                    'asc' => ['gseries' => SORT_ASC],
                    'desc' => ['gseries' => SORT_DESC],
                    'label' => 'Series',
                    'default' => SORT_ASC
                ],
            ],
        ]);


        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'gameID' => $this->gameID,
           
        ]);

        $query->andFilterWhere(['like', 'gname', $this->gname]);

        return $dataProvider;
    }
    public function getSeries(){
        return $this->hasOne(Series::className(), ['id' => 'gseries']);
    }

   
    public function beforeSave($insert)
    { 
        $this->admin_id = 1;
        return parent::beforeSave($insert);

    }}