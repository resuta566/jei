<?php

use yii\db\Migration;

/**
 * Handles the creation of table `cpu`.
 */
class m180917_134450_create_cpu_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('cpu', [
            'id' => $this->primaryKey(),
            'brand' => $this->string(50)->notNull(),
            'prodname' => $this->string(50)->notNull(),
            'sku' => $this->string(100)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('cpu');
    }
}
