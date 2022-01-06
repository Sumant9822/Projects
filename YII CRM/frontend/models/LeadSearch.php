<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Leads;

/**
 * LeadSearch represents the model behind the search form of `frontend\models\Leads`.
 */
class LeadSearch extends Leads
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lead_id'], 'integer'],
            [['lead_name', 'created_at'], 'safe'],
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
        $query = Leads::find();
       // $query->joinWith('admin_employee');
       // $query->andFilterWhere(['like', 'admin_employee.emp_name', $this->emp_id]);   

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'lead_id' => $this->lead_id,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'lead_name', $this->lead_name]);

        return $dataProvider;
    }
}
