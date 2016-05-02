<?php

use yii\db\Migration;

class m160428_164449_attribute_tab extends Migration
{
    public function up()
    {
        $this->createTable('{{%attribute}}', [
            'id' => $this->primaryKey(),
            'name' =>$this->string()->notNull(),
        ]);
        
        $this->createTable('{{%value}}', [
            'auto_id' => $this->integer()->notNull(),
            'attribute_id' => $this->integer()->notNull(),
            'value' => $this->string()->notNull(),
        ]);
        
        $this->addPrimaryKey('pk-value', '{{%value}}', ['auto_id', 'attribute_id']);
        
        $this->createIndex('idx-value-auto_id', '{{%value}}', 'auto_id');
        $this->createIndex('idx-value-attribute_id', '{{%value}}', 'attribute_id');
        
        $this->addForeignKey('fk-value-auto', '{{%value}}', 'auto_id', '{{%auto}}', 'id', 'CASCADE', 'RESTRICT');
        $this->addForeignKey('fk-value-attribute', '{{%value}}', 'attribute_id', '{{%attribute}}', 'id', 'CASCADE', 'RESTRICT');
    }

    public function down()
    {
        $this->dropTable('{{%value}}');
        $this->dropTable('{{%attribute}}');
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
