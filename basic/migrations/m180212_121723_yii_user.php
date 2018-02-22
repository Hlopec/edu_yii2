<?php

use yii\db\Migration;

/**
 * Class m180212_121723_yii_user
 */
class m180212_121723_yii_user extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%yii_user}}', [
            'id' => $this->primaryKey(30),
            'user_name' => $this->string()->notNull(),
            'password' => $this->string()->notNull(),
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180212_121723_yii_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180212_121723_yii_user cannot be reverted.\n";

        return false;
    }
    */
}
