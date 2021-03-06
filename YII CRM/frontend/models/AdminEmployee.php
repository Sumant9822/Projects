<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "admin_employee".
 *
 * @property int $emp_id
 * @property string $emp_name
 * @property string $emp_email
 * @property int $emp_phone
 * @property string $emp_pass
 * @property string $created_at
 *
 * @property Employee[] $employees
 */
class AdminEmployee extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'admin_employee';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['emp_name', 'emp_email', 'emp_phone', 'emp_pass'], 'required'],
            [['emp_phone'], 'integer'],
            [['created_at'], 'safe'],
            [['emp_id','emp_name', 'emp_email', 'emp_pass'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'emp_id' => 'Employee ID',
            'emp_name' => 'Employee Name',
            'emp_email' => 'Employee Email',
            'emp_phone' => 'Employee Phone',
            'emp_pass' => 'Employee Password',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[Employees]].
     *
     * @return \yii\db\ActiveQuery
     */
}
