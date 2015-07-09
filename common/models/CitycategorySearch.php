<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Citycategory;

/**
 * CitycategorySearch represents the model behind the search form about `common\models\Citycategory`.
 */
class CitycategorySearch extends Citycategory
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'active', 'ParentID'], 'integer'],
            [['Name', 'MetaTitle', 'MetaKeywords', 'MetaDescription'], 'safe'],
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
        $query = Citycategory::find();

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
            'active' => $this->active,
            'ParentID' => $this->ParentID,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'MetaTitle', $this->MetaTitle])
            ->andFilterWhere(['like', 'MetaKeywords', $this->MetaKeywords])
            ->andFilterWhere(['like', 'MetaDescription', $this->MetaDescription]);

        return $dataProvider;
    }
}
