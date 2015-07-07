<?php

use yii\db\Schema;
use yii\db\Migration;

class m150609_013225_create_smsTemplate extends Migration
{
    public function safeUp()
    {
        $this->createTable('smsTemplate', [
           'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING.' NOT NULL',
            'text' => Schema::TYPE_TEXT.' NOT NULL',
            'idApartment' => Schema::TYPE_INTEGER,
        ]);
        
        $this->addForeignKey('smsTemplate_appartments_id', 'smsTemplate' , 'idApartment', 'appartments', 'VisibleAppartmentID');
        
    }

    public function safeDown()
    {
       
        $this->dropTable('smsTemplate');
    }
    
    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }
    
    public function safeDown()
    {
    }
    */
}
