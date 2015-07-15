<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "questions".
 *
 * @property integer $id
 * @property integer $show
 * @property string $question
 * @property string $UserName
 * @property string $Mail
 * @property string $date
 * @property string $shortAnser
 * @property string $FullAnswer
 * @property integer $mailAnswer
 */
class Questions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'questions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['show', 'mailAnswer'], 'integer'],
            [['date'], 'safe'],
            [['shortAnser', 'FullAnswer'], 'string'],
            [['question', 'UserName', 'Mail'], 'string', 'max' => 255]
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
            'question' => 'Question',
            'UserName' => 'User Name',
            'Mail' => 'Mail',
            'date' => 'Date',
            'shortAnser' => 'Short Anser',
            'FullAnswer' => 'Full Answer',
            'mailAnswer' => 'Mail Answer',
        ];
    }
}
