<?php

use yii\db\Migration;

/**
 * Handles the creation of table `vehicle`.
 */
class m180523_021036_create_vehicle_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('vehicle', [
            'id' => $this->primaryKey(),
            'make' => $this->string(60)->notNull(),
            'model' => $this->string(60)->notNull(),
            'plate_no' => $this->string(7)->notNull(),
            'year' => $this->string(4),
            'color' => $this->string(20)->notNull(),
            'register_date' => $this->date(),
            'expiration_date' => $this->date()          
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('vehicle');
    }
}
