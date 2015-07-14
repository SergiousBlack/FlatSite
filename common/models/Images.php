<?php

namespace common\models;

use Yii;
use kartik\builder\TabularForm;
use yii\helpers\ArrayHelper;
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
 * @property integer $position
 *
 * @property Flat $flat
 * @property Options $option
 */
class Images extends \yii\db\ActiveRecord {

    
    public $file;
    
    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'images';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['optionID', 'flatID', 'position'], 'integer'],
            [['name', 'img_url', 'info1lvl', 'info2lvl', 'info3lvl'], 'string', 'max' => 255],
            [['file'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg'],
            [['file'], 'safe'],
            [['img_url','position'],'required']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'img_url' => 'Img Url',
            'info1lvl' => 'Info1lvl',
            'info2lvl' => 'Info2lvl',
            'info3lvl' => 'Info3lvl',
            'optionID' => 'Option ID',
            'flatID' => 'Flat ID',
            'position' => 'Позиция'
        ];
    }

 public static function createMultiple($modelClass, $multipleModels = [])
    {
        $model    = new $modelClass;
        $formName = $model->formName();
        $post     = Yii::$app->request->post($formName);
        $models   = [];

        if (! empty($multipleModels)) {
            $keys = array_keys(ArrayHelper::map($multipleModels, 'id', 'id'));
            $multipleModels = array_combine($keys, $multipleModels);
        }

        if ($post && is_array($post)) {
            foreach ($post as $i => $item) {
                if (isset($item['id']) && !empty($item['id']) && isset($multipleModels[$item['id']])) {
                    $models[] = $multipleModels[$item['id']];
                } else {
                    $models[] = new $modelClass;
                }
            }
        }

        unset($model, $formName, $post);

        return $models;
    }

            /**
             * @return \yii\db\ActiveQuery
             */
            public function getFlat() {
                return $this->hasOne(Flat::className(), ['id' => 'flatID']);
            }

            /**
             * @return \yii\db\ActiveQuery
             */
            public function getOption() {
                return $this->hasOne(Options::className(), ['id' => 'optionID']);
            }

        }
        