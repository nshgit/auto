<?php

use yii\db\Migration;

class m160428_164329_category_marka_tab extends Migration
{
    public function up()
    {
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'name' =>$this->string()->notNull(),
        ]);
        
        $this->createTable('{{%marka}}', [
            'id' => $this->primaryKey(),
            'name' =>$this->string()->notNull(),
        ]);
        
        
    }

    public function down()
    {
        $this->dropTable('{{%category}}');
        $this->dropTable('{{%marka}}');
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
