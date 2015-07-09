<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\templategroups;

/**
 * templategroupsSearch represents the model behind the search form about `backend\models\templategroups`.
 */
class templategroupsSearch extends templategroups
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AppartmentID'], 'integer'],
            [['AppartmentInfo'], 'safe'],
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
        $query = templategroups::find();

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
            'AppartmentID' => $this->AppartmentID,
        ]);

        $query->andFilterWhere(['like', 'AppartmentInfo', $this->AppartmentInfo]);

        return $dataProvider;
    }
}
