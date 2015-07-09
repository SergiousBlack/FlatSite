<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "templategroups".
 *
 * @property integer $AppartmentID
 * @property string $AppartmentInfo
 *
 * @property Smstemplate[] $smstemplates
 */
class templategroups extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'templategroups';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AppartmentInfo'], 'required'],
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
            'AppartmentInfo' => 'Группа',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSmstemplates()
    {
        return $this->hasMany(Smstemplate::className(), ['idApartment' => 'AppartmentID']);
    }
}
