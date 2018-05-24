<?php

use yii\db\Migration;

/**
 * Handles the creation of table `human`.
 */
class m180523_021722_create_human_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('human', [
            'id' => $this->primaryKey(),
            'license_id' => $this->integer()->notNull(),
            'vehicle_id' => $this->integer()->notNull(),
            'last_name' => $this->string(60)->notNull(),
            'first_name' => $this->string(50)->notNull(),
            'address' => $this->text()->notNull(),
            'phone' => $this->string(12)->notNull(),
            'sex' => $this->string(1)->notNull(),
            'bdate' => $this->date('DATE'),
            'weight' => $this->string(10),
            'height' => $this->string(10),
            'nationality' => $this->string(20),
            'age' => $this->string(99)
        ]);
        $this->createIndex(
            'idx-human-license_id',
            'human','license_id'
        );

        $this->addForeignKey(
            'fk-human-license',
            'human','license_id',
            'license', 'id'
        );

        $this->createIndex(
            'idx-human-vehicle',
            'human','vehicle_id'
        );

        $this->addForeignKey(
            'fk-human-vehicle',
            'human','vehicle_id',
            'vehicle', 'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-human-license', 'human');
        $this->dropForeignKey('fk-human-vehicle', 'human');
        $this->dropIndex('idx-human-license_id','human');
        $this->dropIndex('idx-human-vehicle_id','human');
        $this->dropTable('human');
    }
}
