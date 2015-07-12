<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "flatoptions".
 *
 * @property integer $id
 * @property integer $flatID
 * @property integer $OptionID
 *
 * @property Options $option
 * @property Flat $flat
 */
class Flatoptions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'flatoptions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['flatID', 'OptionID'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'flatID' => 'Flat ID',
            'OptionID' => 'Option ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOption()
    {
        return $this->hasOne(Options::className(), ['id' => 'OptionID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFlat()
    {
        return $this->hasOne(Flat::className(), ['id' => 'flatID']);
    }
}
