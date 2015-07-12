<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Flat;

/**
 * FlatSearch represents the model behind the search form about `common\models\Flat`.
 */
class FlatSearch extends Flat
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'showMainPage', 'roomNumber', 'cityCategoryID'], 'integer'],
            [['name', 'mainImage', 'mainImageInfo1lvl', 'mainImageInfo2lvl', 'mainImageInfo3lvl', 'address', 'addressForMap', 'additionalInfo', 'coastInfo', 'shortInfo', 'fullInfo', 'printText', 'metaTitle', 'metaKeywords', 'metaDescription'], 'safe'],
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
        $query = Flat::find();

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
            'showMainPage' => $this->showMainPage,
            'roomNumber' => $this->roomNumber,
            'cityCategoryID' => $this->cityCategoryID,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'mainImage', $this->mainImage])
            ->andFilterWhere(['like', 'mainImageInfo1lvl', $this->mainImageInfo1lvl])
            ->andFilterWhere(['like', 'mainImageInfo2lvl', $this->mainImageInfo2lvl])
            ->andFilterWhere(['like', 'mainImageInfo3lvl', $this->mainImageInfo3lvl])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'addressForMap', $this->addressForMap])
            ->andFilterWhere(['like', 'additionalInfo', $this->additionalInfo])
            ->andFilterWhere(['like', 'coastInfo', $this->coastInfo])
            ->andFilterWhere(['like', 'shortInfo', $this->shortInfo])
            ->andFilterWhere(['like', 'fullInfo', $this->fullInfo])
            ->andFilterWhere(['like', 'printText', $this->printText])
            ->andFilterWhere(['like', 'metaTitle', $this->metaTitle])
            ->andFilterWhere(['like', 'metaKeywords', $this->metaKeywords])
            ->andFilterWhere(['like', 'metaDescription', $this->metaDescription]);

        return $dataProvider;
    }
}
