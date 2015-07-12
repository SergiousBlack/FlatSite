<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "flat".
 *
 * @property integer $id
 * @property string $name
 * @property string $mainImage
 * @property string $mainImageInfo1lvl
 * @property string $mainImageInfo2lvl
 * @property string $mainImageInfo3lvl
 * @property integer $showMainPage
 * @property integer $roomNumber
 * @property string $address
 * @property string $addressForMap
 * @property string $additionalInfo
 * @property string $coastInfo
 * @property string $shortInfo
 * @property string $fullInfo
 * @property string $printText
 * @property integer $cityCategoryID
 * @property string $metaTitle
 * @property string $metaKeywords
 * @property string $metaDescription
 *
 * @property Citycategory $cityCategory
 * @property Flatoptions[] $flatoptions
 * @property Options[] $options
 * @property Images[] $images
 */

class Flat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'flat';
    }

    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios['edit'] = ['options'];
        return $scenarios;
    }
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['options', 'safe'],
            [['showMainPage', 'roomNumber', 'cityCategoryID'], 'integer'],
            [['shortInfo', 'fullInfo', 'metaTitle', 'metaKeywords', 'metaDescription'], 'string'],
            [['name', 'mainImage', 'mainImageInfo1lvl', 'mainImageInfo2lvl', 'mainImageInfo3lvl', 'address', 'addressForMap', 'additionalInfo', 'coastInfo', 'printText'], 'string', 'max' => 255]
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
            'mainImage' => 'Main Image',
            'mainImageInfo1lvl' => 'Main Image Info1lvl',
            'mainImageInfo2lvl' => 'Main Image Info2lvl',
            'mainImageInfo3lvl' => 'Main Image Info3lvl',
            'showMainPage' => 'Show Main Page',
            'roomNumber' => 'Room Number',
            'address' => 'Address',
            'addressForMap' => 'Address For Map',
            'additionalInfo' => 'Additional Info',
            'coastInfo' => 'Coast Info',
            'shortInfo' => 'Short Info',
            'fullInfo' => 'Full Info',
            'printText' => 'Print Text',
            'cityCategoryID' => 'City Category ID',
            'metaTitle' => 'Meta Title',
            'metaKeywords' => 'Meta Keywords',
            'metaDescription' => 'Meta Description',
        ];
    }
    
    
    public function afterSave($insert, $changedAttributes)
    {
        if(!$insert) {
            Flatoptions::deleteAll(['flatID' => $this->id]);
        }
        
        if(is_array($this->options)) {
            
            foreach ($this->options as $cat) {
                $category = new Flatoptions();
                $category->flatID = $this->id;
                
                $category->OptionID = $cat;
                $category->save();
            }
        }
    }
    
    public function setOptions($options)
    {
        $this->options = $options;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCityCategory()
    {
        return $this->hasOne(Citycategory::className(), ['id' => 'cityCategoryID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFlatoptions()
    {
        return $this->hasMany(Flatoptions::className(), ['flatID' => 'id']);
                    
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImages()
    {
        return $this->hasMany(Images::className(), ['flatID' => 'id']);
    }
    
    public function getOptions()
    {
        return $this->hasMany(Options::className(), ['id' => 'OptionID'])->viaTable(Flatoptions::tableName(), ['flatID' => 'id']);
    }
    
    
}
