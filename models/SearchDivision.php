<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Division;

/**
 * SearchDivision represents the model behind the search form about `app\models\Division`.
 */
class SearchDivision extends Division
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['division_id', 'status'], 'integer'],
            [['division_label'], 'safe'],
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
        $query = Division::find();

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
            'division_id' => $this->division_id,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'division_label', $this->division_label]);

        return $dataProvider;
    }
}
