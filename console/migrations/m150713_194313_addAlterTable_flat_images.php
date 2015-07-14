<?php

use yii\db\Schema;
use yii\db\Migration;

class m150713_194313_addAlterTable_flat_images extends Migration
{
//    public function up()
//    {
//
//    }
//
//    public function down()
//    {
//        echo "m150713_194313_addAlterTable_flat_images cannot be reverted.\n";
//
//        return false;
//    }
    

    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
        $this->addColumn('flat', 'FlatID', 'string');
        $this->addColumn('images', 'position', 'integer');
    }
    
    public function safeDown()
    {
    }

}
