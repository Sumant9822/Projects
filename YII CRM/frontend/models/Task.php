<?php

namespace frontend\models;


use Yii;
use frontend\models\AdminEmployee;


/**
 * This is the model class for table "task".
 *
 * @property int $task_id
 * @property string $task_name
 * @property string $task_desc
 * @property string $start_date
 * @property int|null $emp_id
 */
class Task extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'task';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['task_name', 'task_desc'], 'required'],
            [['start_date'], 'safe'],
            [['emp_id', 'task_id'], 'integer'],
            [['task_name', 'task_desc', 'emp_id'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'task_id' => 'Task ID',
            'task_name' => 'Task Name',
            'task_desc' => 'Task Status',
            'start_date' => 'Start Date',
            'emp_id' => 'Employee Name',
        ];
    }

    public function getAdminEmployee() {
        return $this->hasOne(AdminEmployee::className(), ['emp_id' => 'emp_id']);
    }
}
