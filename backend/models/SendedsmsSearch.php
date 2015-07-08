<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\SendedSms;

/**
 * SendedsmsSearch represents the model behind the search form about `backend\models\SendedSms`.
 *   
 */
class SendedsmsSearch extends SendedSms
{
    
    
    public $SendedDateEnd;
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'IdInSMSC'], 'integer'],
            [['Target','senderID','templateID', 'SendedDate','Status'], 'safe'],
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
         
        
        if(isset($params['SendedsmsSearch']['SendedDateEnd'])){
            $this->SendedDateEnd = $params['SendedsmsSearch']['SendedDateEnd'];
        }
        
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
           
        ]);
         
        $query->andFilterWhere(['like', 'Target', $this->Target])
              ->andFilterWhere(['like','SmsTemplate.name',  $this->templateID])
              ->andFilterWhere(['like', 'smsstatus.name', $this->Status])
              ->andfilterWhere(['like', 'user.username', $this->senderID])
              ->andFilterWhere(['>=','SendedDate',$this->SendedDate])
              ->andFilterWhere(['<=','SendedDate',$this->SendedDateEnd]);
       
     
        
        return $dataProvider;
    }
}
