<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "reviews".
 *
 * @property integer $id
 * @property integer $show
 * @property string $UserName
 * @property string $Mail
 * @property string $date
 * @property string $text_review
 * @property string $image_url
 * @property string $company_url
 */
class Reviews extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reviews';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['show'], 'integer'],
            [['date'], 'safe'],
            [['text_review'], 'string'],
            [['UserName', 'Mail', 'image_url', 'company_url'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'show' => 'Show',
            'UserName' => 'User Name',
            'Mail' => 'Mail',
            'date' => 'Date',
            'text_review' => 'Text Review',
            'image_url' => 'Image Url',
            'company_url' => 'Company Url',
        ];
    }
}
