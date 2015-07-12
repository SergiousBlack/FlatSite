<?php

use yii\db\Schema;
use yii\db\Migration;

class m150711_212958_addFlat extends Migration
{
    
//    public function up()
//    {
//
//    }
//
//    public function down()
//    {
//        echo "m150711_212958_addFlat cannot be reverted.\n";
//
//        return false;
//    }
    
    
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
        $this->createTable('images', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING,
            'img_url' => Schema::TYPE_STRING,
            'info1lvl' => Schema::TYPE_STRING,
            'info2lvl' => Schema::TYPE_STRING,
            'info3lvl' => Schema::TYPE_STRING,
            'optionID' => Schema::TYPE_INTEGER,
            'flatID' => Schema::TYPE_INTEGER
        ]);
        
        $this->createIndex('optionID_Option', 'images', 'optionID');
        $this->addForeignKey('optionRelations', 'images', 'optionID', 'Options', 'id');
        
        
        $this->createTable('Flat', [
            
            'id' => Schema::TYPE_PK,
            'name' =>Schema::TYPE_STRING,
            'mainImage' => Schema::TYPE_STRING,
            'mainImageInfo1lvl' =>Schema::TYPE_STRING,
            'mainImageInfo2lvl' =>Schema::TYPE_STRING,
            'mainImageInfo3lvl' =>Schema::TYPE_STRING,
            'showMainPage' => Schema::TYPE_BOOLEAN,
            'roomNumber' =>Schema::TYPE_INTEGER,
            'address' => Schema::TYPE_STRING,
            'addressForMap' => Schema::TYPE_STRING,
            'additionalInfo' => Schema::TYPE_TEXT,
            'coastInfo' => Schema::TYPE_TEXT,
            'shortInfo' => Schema::TYPE_TEXT,
            'fullInfo' => Schema::TYPE_TEXT,
            'printText' =>Schema::TYPE_TEXT,
            'cityCategoryID' => Schema::TYPE_INTEGER,
            'metaTitle' => Schema::TYPE_TEXT,
            'metaKeywords' => Schema::TYPE_TEXT,
            'metaDescription' => Schema::TYPE_TEXT
            
        ]);
        
        
        $this->createIndex('CatIDForFlat', 'Flat', 'cityCategoryID');
        $this->addForeignKey('CatIDForFlatForegin', 'Flat', 'cityCategoryID', 'CityCategory', 'id');
        
        $this->createIndex('ImageFlat', 'images', 'flatID');
        $this->addForeignKey('ImageRelation', 'images', 'flatID', 'Flat', 'id');
        
        $this->createTable('FlatOptions', [
            
                'id' => Schema::TYPE_PK,
                'flatID' => Schema::TYPE_INTEGER,
                'OptionID' => Schema::TYPE_INTEGER,
            
        ]);
        
        $this->createIndex('FlatOptionsFLAT', 'FlatOptions', 'flatID');
        $this->createIndex('FlatOptionsOPTION', 'FlatOptions', 'OptionID');
        $this->addForeignKey('FlatOptionsOPTIONForegin', 'FlatOptions', 'flatID', 'Flat', 'id'); 
        $this->addForeignKey('FlatOptionsFLATForegin', 'FlatOptions', 'OptionID', 'Options', 'id');
        
        
    }
    
    public function safeDown()
    {
        $this->dropForeignKey('FlatOptionsOPTIONForegin', 'FlatOptions');
         $this->dropForeignKey('FlatOptionsFLATForegin', 'FlatOptions');
          $this->dropForeignKey('ImageRelation', 'images');
           $this->dropForeignKey('CatIDForFlatForegin', 'Flat');
            $this->dropForeignKey('optionRelations', 'images');
            
        $this->dropIndex('FlatOptionsFLAT', 'FlatOptions');
        $this->dropIndex('FlatOptionsOPTION', 'FlatOptions');
        $this->dropIndex('ImageFlat', 'images');
        $this->dropIndex('CatIDForFlat', 'Flat');
        $this->dropIndex('optionID_Option', 'images'); 
            
        
        
        
        $this->dropTable('images');
        $this->dropTable('FlatOptions');
        $this->dropTable('Flat');
    }
    
}
