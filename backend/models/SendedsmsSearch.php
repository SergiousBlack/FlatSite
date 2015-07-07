<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\SendedSms;

/**
 * SendedsmsSearch represents the model behind the search form about `backend\models\SendedSms`.
 *  @property string $SendedDateEnd
 */
class SendedsmsSearch extends SendedSms
{
    
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'senderID', 'IdInSMSC'], 'integer'],
            [['Target','templateID', 'SendedDate','Status'], 'safe'],
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
        $query = SendedSms::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        
        
        $query->joinWith('template');
        $query->joinWith('status');
        $query->joinWith('sender');
        
        $query->andFilterWhere([
            'id' => $this->id,
            
            'IdInSMSC' => $this->IdInSMSC, 
            'SendedDate' => $this->SendedDate,
        ]);

        $query->andFilterWhere(['like', 'Target', $this->Target])
              ->andFilterWhere(['like','SmsTemplate.name',  $this->templateID])
              ->andFilterWhere(['like', 'smsstatus.name', $this->Status])
              ->filterWhere(['like', '']);
       

        return $dataProvider;
    }
}
