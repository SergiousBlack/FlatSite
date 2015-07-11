<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property integer $id
 * @property string $Name
 * @property integer $active
 * @property string $TextInfo
 * @property string $MetaTitle
 * @property string $MetaKeywords
 * @property string $MetaDescription
 *
 * @property Citycategory[] $citycategories
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'city';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['active'], 'integer'],
            [['TextInfo', 'MetaTitle', 'MetaKeywords', 'MetaDescription'], 'string'],
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
            'TextInfo' => 'Описание',
            'MetaTitle' => 'Meta Title',
            'MetaKeywords' => 'Meta Keywords',
            'MetaDescription' => 'Meta Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCitycategories()
    {
        return $this->hasMany(Citycategory::className(), ['ParentID' => 'id']);
    }
}
