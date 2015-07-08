<?php

namespace backend\models;

use Yii;
use common\models\User;

/**
 * This is the model class for table "sendedsms".
 *
 * @property integer $id
 * @property integer $senderID
 * @property integer $templateID
 * @property integer $IdInSMSC
 * @property integer $Status
 * @property string $Target
 * @property string $SendedDate 
 * @property Smsstatus $status
 * @property Smstemplate $template
 * @property User $sender
 */
class SendedSms extends \yii\db\ActiveRecord
{
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sendedsms';
    }

    /**
     * @inheritdoc
     */
   
     
    public function rules()
    {
        return [
            [['templateID', 'IdInSMSC', 'Status'], 'integer'],
            [['Target','templateID'],'required', 'message'=>'Это поле обязательно к заполнению'],
            [['SendedDate','senderID','SendedDateEnd'], 'safe'], 
            [['Target'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
           'id' => 'ID',
            'senderID' => 'Отправитель',
            'templateID' => 'Шаблон',
            'IdInSMSC' => 'ID на сайте SMSC',
            'Status' => 'Статус',
            'Target' => 'Получатель',
            'SendedDate' => 'Время отправки',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Smsstatus::className(), ['id' => 'Status']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTemplate()
    {
        return $this->hasOne(Smstemplate::className(), ['id' => 'templateID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSender()
    {
        return $this->hasOne(User::className(), ['id' => 'senderID']);
    }
}
