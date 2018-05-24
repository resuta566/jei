<?php
use yii\db\Migration;
/**
 * Handles the creation of table `license`.
 */
class m180523_020421_create_license_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('license', [
            'id' => $this->primaryKey(),
            'restriction' => $this->string(10)->notNull(),
            'condition' => $this->string(10),
            'register_date' => $this->date(),
            'expireDate' => $this->date()
        ]);
    }
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('license');
    }
}