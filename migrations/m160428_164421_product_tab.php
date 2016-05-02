<?php

use yii\db\Migration;

class m160428_164421_product_tab extends Migration
{
    public function up()
    {
        $this->createTable('{{%auto}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(),
            'marka_id' => $this->integer(),
            'name' => $this->string()->notNull(),
            'content' => $this->text(),
            'date' => $this->date()->notNull(),
        ]);
        
        $this->createIndex('idx-auto-category-id', '{{%auto}}', 'category_id');
        
        $this->createIndex('idx-auto-marka-id', '{{%auto}}', 'marka_id');
        
        $this->addForeignKey('fk-auto-category', '{{%auto}}', 'category_id', '{{%category}}', 'id',  'CASCADE', 'RESTRICT');
        
        $this->addForeignKey('fk-auto-marka', '{{%auto}}', 'marka_id', '{{%marka}}', 'id',  'CASCADE', 'RESTRICT');
    }

    public function down()
    {
        $this->dropTable('{{%auto}}');
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
