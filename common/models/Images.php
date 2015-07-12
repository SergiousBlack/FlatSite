<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "images".
 *
 * @property integer $id
 * @property string $name
 * @property string $img_url
 * @property string $info1lvl
 * @property string $info2lvl
 * @property string $info3lvl
 * @property integer $optionID
 * @property integer $flatID
 *
 * @property Flat $flat
 * @property Options $option
 */
class Images extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'images';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['optionID', 'flatID'], 'integer'],
            [['name', 'img_url', 'info1lvl', 'info2lvl', 'info3lvl'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'img_url' => 'Img Url',
            'info1lvl' => 'Info1lvl',
            'info2lvl' => 'Info2lvl',
            'info3lvl' => 'Info3lvl',
            'optionID' => 'Option ID',
            'flatID' => 'Flat ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFlat()
    {
        return $this->hasOne(Flat::className(), ['id' => 'flatID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOption()
    {
        return $this->hasOne(Options::className(), ['id' => 'optionID']);
    }
}
