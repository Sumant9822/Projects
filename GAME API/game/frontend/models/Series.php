<?php

namespace frontend\models;
use Yii;

class Series extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'series';
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
            [['create_date'], 'safe'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'create_date' => 'Create Date',
        ];
    }
    public function getGame(){
        return $this->hasMany(Game::className(), ['gameID' => 'id']);
    }
}
