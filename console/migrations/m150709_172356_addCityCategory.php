<?php

use yii\db\Schema;
use yii\db\Migration;

class m150709_172356_addCityCategory extends Migration
{
//    public function up()
//    {
//
//    }
//
//    public function down()
//    {
//        echo "m150709_172356_addCityCategory cannot be reverted.\n";
//
//        return false;
//    }
    
  
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
         $this->createTable('CityCategory', 
        [
            'id' => Schema::TYPE_PK,
            'Name' => Schema::TYPE_STRING,
            'active' => Schema::TYPE_BOOLEAN,
            'MetaTitle' => Schema::TYPE_TEXT,
            'MetaKeywords' => Schema::TYPE_TEXT,
            'MetaDescription' => Schema::TYPE_TEXT,
            'ParentID' => Schema::TYPE_INTEGER,
        ]);
         
        $this->createIndex('ParentToCity', 'CityCategory', 'ParentID');
        $this->addForeignKey('CatToCity', 'CityCategory', 'ParentID', 'City', 'id');
         
    }
    
    public function safeDown()
    {
        $this->dropForeignKey('CatToCity', 'CityCategory');
        $this->dropIndex('ParentToCity','CityCategory');
        $this->dropTable('CityCategory');
         
    }
    
}
