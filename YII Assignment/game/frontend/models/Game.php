<?php

namespace app\models;
use Yii;

class Game extends \yii\db\ActiveRecord
{
  
    public static function tableName()
    {
        return 'games';
    }

   
    public function rules()
    {
        return [
            [[ 'gseries','gname', 'gspace', 'gdeveloper', 'gpublisher', 'ggenres'], 'required'],
            [['created_at'], 'safe'],
            [['gname', 'gdeveloper', 'gpublisher', 'ggenres'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'gameID' => 'Game ID',
            'admin_id' => 'Admin ID',
            'gname' => 'Game Name',
            'gseries' => 'Game Series',
            'gspace' => 'Game Space',
            'gdeveloper' => 'Game Developer',
            'gpublisher' => 'game Publisher',
            'ggenres' => 'Game Genres',
            'created_at' => 'Create Date',
        ];
    }
    public function getSeries(){
        return $this->hasOne(Series::className(), ['id' => 'gseries']);
    }

   
    public function beforeSave($insert)
    { 
        $this->admin_id = 1;
        return parent::beforeSave($insert);

    }
}
