<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "citycategory".
 *
 * @property integer $id
 * @property string $Name
 * @property integer $active
 * @property string $MetaTitle
 * @property string $MetaKeywords
 * @property string $MetaDescription
 * @property integer $ParentID
 *
 * @property City $parent
 */
class Citycategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'citycategory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['active', 'ParentID'], 'integer'],
            [['MetaTitle', 'MetaKeywords', 'MetaDescription'], 'string'],
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
            'Name' => 'Название',
            'active' => 'Активность',
            'MetaTitle' => 'Meta Title',
            'MetaKeywords' => 'Meta Keywords',
            'MetaDescription' => 'Meta Description',
            'ParentID' => 'Город',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(City::className(), ['id' => 'ParentID']);
    }
}
