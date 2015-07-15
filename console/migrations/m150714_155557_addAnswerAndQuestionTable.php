<?php

use yii\db\Schema;
use yii\db\Migration;

class m150714_155557_addAnswerAndQuestionTable extends Migration
{
//    public function up()
//    {
//
//    }
//
//    public function down()
//    {
//        echo "m150714_155557_addAnswerAndQuestionTable cannot be reverted.\n";
//
//        return false;
//    }
    
     
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
        $this->createTable('questions', [
            'id' => Schema::TYPE_PK,
            'show' => Schema::TYPE_BOOLEAN,
            'question' => Schema::TYPE_STRING,
            'UserName' => Schema::TYPE_STRING,
            'Mail' => Schema::TYPE_STRING,
            'date' => Schema::TYPE_DATETIME,
            'shortAnser' => Schema::TYPE_TEXT,
            'FullAnswer' => Schema::TYPE_TEXT,
            'mailAnswer' => Schema::TYPE_BOOLEAN
        ]);
        
        $this->createTable('reviews', [
            'id' => Schema::TYPE_PK,
            'show' => Schema::TYPE_BOOLEAN,
            'UserName' => Schema::TYPE_STRING,
            'Mail' => Schema::TYPE_STRING,
            'date' => Schema::TYPE_DATETIME,
            'text_review' => Schema::TYPE_TEXT,
            'image_url' => Schema::TYPE_STRING,
            'company_url' => Schema::TYPE_STRING,
        ]);
    }
    
    public function safeDown()
    {
        $this->dropTable('questions');
        $this->dropTable('reviews');
    }
    
}
