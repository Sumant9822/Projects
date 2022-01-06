<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Admin;
use frontend\models\Task;
use frontend\models\AdminEmployee;

class TaskSearch extends Task
{
    /**
     * {@inheritdoc}
     */
    public $emp_name;
    public function rules()
    {
        return [
            [['task_id', 'emp_id'], 'integer'],
            [['task_name', 'task_desc', 'start_date', 'emp_name'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
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

        $this->load($params);
        $query = Task::find();
        
       $query->joinWith(['adminEmployee']);
    
       $query->andFilterWhere([
        'admin_employee.emp_name' => $this->emp_name,
        
    ]);
       // 'emp_id' => $this->emp_id,
      //'like', 'admin_employee.emp_name', $this->admin_employee]);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->setSort([
            'attributes' => [
                'task_id',
                'task_name',
                'task_desc',
                'start_date',
                'emp_name' => [
                    'asc' => ['emp_name' => SORT_ASC],
                    'desc' => ['emp_name' => SORT_DESC],
                    'label' => 'Employee Name',
                    'default' => SORT_ASC
                ]],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'task_id' => $this->task_id,
            'start_date' => $this->start_date,
        ]);

        $query->andFilterWhere(['like', 'task_name', $this->task_name]);

        return $dataProvider;
    }

    public function getAdminEmployee() {
        return $this->hasOne(AdminEmployee::className(), ['emp_id' => 'emp_id']);
    }
}
