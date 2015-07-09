<?php

use yii\db\Schema;
use yii\db\Migration;

class m150709_171225_addSity extends Migration
{
//    public function up()
//    {
//
//    }
//
//    public function down()
//    {
//        echo "m150709_171225_addSity cannot be reverted.\n";
//
//        return false;
//    }
    
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
        $this->createTable('City', 
        [
            'id' => Schema::TYPE_PK,
            'Name' => Schema::TYPE_STRING,
            'active' => Schema::TYPE_BOOLEAN,
            'TextInfo' => Schema::TYPE_TEXT,
            'MetaTitle' => Schema::TYPE_TEXT,
            'MetaKeywords' => Schema::TYPE_TEXT,
            'MetaDescription' => Schema::TYPE_TEXT,
        ]);
        
        
    }
    
    public function safeDown()
    {
        $this->dropTable('City');
    }
   
}
