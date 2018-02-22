<?php

use yii\db\Migration;

/**
 * Class m180212_133941_yii_category
 */
class m180212_133941_yii_category extends Migration
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

        $this->createTable('{{%yii_category}}', [
            'id' => $this->primaryKey(30),
            'category_id' => $this->string()->notNull(),
            'category_name' => $this->string()->notNull(),
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180212_133941_yii_category cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180212_133941_yii_category cannot be reverted.\n";

        return false;
    }
    */
}
