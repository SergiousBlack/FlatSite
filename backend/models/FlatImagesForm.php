<?php
namespace backend\models;
use yii\base\Model;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FlatImagesForm
 *
 * @author Мова
 */

/**
 * 
 * @property integer $flatID
 * 
 * @property Options[] $avaibleOptions 
 * @property Images[] $images
 */

class FlatImagesForm extends Model{
    
    public $flatID;
    public $isNewRecord;
    
    public function rules()
    {
        return [
            [['flatID'], 'integer'],
        ];
    }
}
