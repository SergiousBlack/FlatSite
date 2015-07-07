<?php

use yii\db\Schema;
use yii\db\Migration;

class m150611_013855_create_smssended_table extends Migration
{
   /* public function up()
    {

    }

    public function down()
    {
        echo "m150611_013855_create_smssended_table cannot be reverted.\n";

        return false;
    }*/
    
   
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
        $this->createTable('SendedSms', [
            'id' => Schema::TYPE_PK,
            'senderID' => Schema::TYPE_INTEGER,
            'templateID' => Schema::TYPE_INTEGER,
            'IdInSMSC' => Schema::TYPE_INTEGER,
            'Status' => Schema::TYPE_INTEGER,
            'Target' => Schema::TYPE_STRING,
            'SendedDate' => Schema::TYPE_DATETIME,
            
        ]);
        
          $this->createTable('SmsStatus', [
            'id' => Schema::TYPE_PK,
            'Name' => Schema::TYPE_STRING,
            'idSMSC' => Schema::TYPE_INTEGER,
        ]);
        
        $this->createIndex('SenderID', 'SendedSms', 'senderID',  false);
        $this->addForeignKey('smsSended_users_id', 'SendedSms' , 'senderID', 'user', 'id');
        $this->createIndex('templateID', 'SendedSms', 'templateID',  false);
        $this->addForeignKey('smsSended_template_id', 'SendedSms' , 'templateID', 'smstemplate', 'id');
        $this->createIndex('Status', 'SendedSms', 'Status',  false);
        $this->addForeignKey('smsSended_status', 'SendedSms' , 'Status', 'SmsStatus', 'id');
        
    }
    
    public function safeDown()
    {
        $this->dropTable('SendedSms');
        $this->dropTable('SmsStatus');
    }
  
}
