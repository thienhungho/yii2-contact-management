<?php

namespace thienhungho\ContactManagement\modules\ContactManage\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use thienhungho\ContactManagement\modules\ContactBase\Contact;

/**
 * thienhungho\ContactManagement\modules\ContactManage\search\ContactSearch represents the model behind the search form about `thienhungho\ContactManagement\modules\ContactBase\Contact`.
 */
 class ContactSearch extends Contact
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'created_by', 'updated_by'], 'integer'],
            [['subject', 'author_email', 'author_name', 'author_phone', 'author_birth_date', 'author_stress_address', 'author_city', 'author_zip_code', 'content', 'created_at', 'updated_at', 'status'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Contact::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'author_birth_date' => $this->author_birth_date,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'subject', $this->subject])
            ->andFilterWhere(['like', 'author_email', $this->author_email])
            ->andFilterWhere(['like', 'author_name', $this->author_name])
            ->andFilterWhere(['like', 'author_phone', $this->author_phone])
            ->andFilterWhere(['like', 'author_stress_address', $this->author_stress_address])
            ->andFilterWhere(['like', 'author_city', $this->author_city])
            ->andFilterWhere(['like', 'author_zip_code', $this->author_zip_code])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'content', $this->content]);

        return $dataProvider;
    }
}
