<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "smsTemplate".
 *
 * @property integer $id
 * @property string $name
 * @property string $text
 * @property integer $idApartment
 *
 * @property Appartments $idApartment0
 */
class SmsTemplate extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'smstemplate';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'text'], 'required'],
            [['text'], 'string'],
            [['idApartment'], 'integer'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название шаблона',
            'text' => 'Текст отправки',
            'idApartment' => 'ID шаблона',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdApartment0()
    {
        return $this->hasOne(Appartments::className(), ['VisibleAppartmentID' => 'idApartment']);
    }
}
