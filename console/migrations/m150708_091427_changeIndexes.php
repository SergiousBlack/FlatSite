<?php

use yii\db\Schema;
use yii\db\Migration;

class m150708_091427_changeIndexes extends Migration
{
//    public function up()
//    {
//        
//    }
//
//    public function down()
//    {
//        echo "m150708_091427_changeIndexes cannot be reverted.\n";
//
//        return false;
//    }
    
    
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
        $this->renameTable('appartments', 'TemplateGroups');
        
        $this->dropForeignKey('smsTemplate_appartments_id', 'smsTemplate');
        $this->dropIndex('Appartment_Vis_ID_index', 'TemplateGroups' );
        
        $this->dropColumn('TemplateGroups', 'VisibleAppartmentID'); 
        $this->addForeignKey('smsTemplate_appartments_by_id', 'smsTemplate' , 'idApartment', 'TemplateGroups', 'AppartmentID');
        
    }
    
    public function safeDown()
    {
         
        
    }
    
}
