<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "appartments".
 *
 * @property integer $AppartmentID
 * @property string $AppartmentInfo
 * @property integer $VisibleAppartmentID
 *
 * @property SmsTemplate[] $smsTemplates
 */
class Appartments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'appartments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AppartmentInfo'], 'required'],
            [['VisibleAppartmentID'], 'integer'],
            [['AppartmentInfo'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'AppartmentID' => 'ID',
            'AppartmentInfo' => 'Название',
            'VisibleAppartmentID' => 'ID группы',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSmsTemplates()
    {
        return $this->hasMany(SmsTemplate::className(), ['idApartment' => 'VisibleAppartmentID']);
    }
}
