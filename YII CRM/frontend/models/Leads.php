<?php






namespace frontend\models;

use Yii;

/**
 * This is the model class for table "leads".
 *
 * @property int $lead_id
 * @property string|null $lead_name
 * @property int $plan_id
 * @property string|null $created_at
 */
class Leads extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'leads';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['plan_id'], 'required'],
            [['plan_id'], 'integer'],
            [['created_at'], 'safe'],
            [['lead_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'lead_id' => 'Lead ID',
            'lead_name' => 'Lead Name',
            'plan_id' => 'Plan ID',
            'created_at' => 'Created At',
        ];
    }

    public function getPlan(){
        return $this->hasOne(Plan::className(),['id'=>'plan_id']);
      }
}
