<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "flatoptions".
 *
 * @property integer $id
 * @property string $name
 * @property integer $active
 */
class Options extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'options';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['active'], 'integer'],
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
            'name' => 'Название',
            'active' => 'Active',
        ];
    }
}
