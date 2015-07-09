<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "SmsStatus".
 *
 * @property integer $id
 * @property string $Name
 * @property integer $idSMSC
 *
 * @property SendedSms[] $sendedSms
 */
class SmsStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'smsstatus';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idSMSC'], 'integer'],
            [['Name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Name' => 'Name',
            'idSMSC' => 'Id Smsc',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSendedSms()
    {
        return $this->hasMany(SendedSms::className(), ['Status' => 'id']);
    }
}
