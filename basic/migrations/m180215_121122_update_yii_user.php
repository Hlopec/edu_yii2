<?php

use yii\db\Migration;

/**
 * Class m180215_121122_update_yii_user
 */
class m180215_121122_update_yii_user extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn('yii_user','email', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180215_121122_update_yii_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180215_121122_update_yii_user cannot be reverted.\n";

        return false;
    }
    */
}
