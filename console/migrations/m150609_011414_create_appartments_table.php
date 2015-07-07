<?php

use yii\db\Schema;
use yii\db\Migration;
use \yii\db\mysql;

class m150609_011414_create_appartments_table extends Migration
{
    public function up()
    {
        $this->createTable('appartments', [
            'AppartmentID'=> Schema::TYPE_PK, 
            'AppartmentInfo'=> Schema::TYPE_STRING.' NOT NULL',
            'VisibleAppartmentID' => Schema::TYPE_INTEGER,
        ]);
        
        $this->createIndex('Appartment_Vis_ID_index', 'appartments', 'VisibleAppartmentID', false);
        
    }

    public function down()
    {
        
        $this->dropTable('appartments');
         
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
