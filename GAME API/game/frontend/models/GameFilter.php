<?php

namespace frontend\models;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Game;
use frontend\models\Series;
class GameFilter extends Game
{

  public $gseries;
  public $gname;
  public $gdeveloper;
  public $gspace;
  public $gpublisher; 
  public $ggenres;
  public $created_at;

    public function rules()
    {
        return [
            [[ 'gseries','gname', 'gspace', 'gdeveloper', 'gpublisher', 'ggenres'], 'required'],
            // [['gseries','gname', 'gspace', 'gdeveloper', 'gpublisher', 'ggenres','created_at'], 'safe'],
            [['gname', 'gdeveloper', 'gpublisher', 'ggenres'], 'string'],
        ];
            }
        }