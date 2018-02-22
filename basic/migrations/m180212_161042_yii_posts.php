<?php

use yii\db\Migration;

/**
 * Class m180212_161042_yii_posts
 */
class m180212_161042_yii_posts extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn('yii_posts','author', $this->string());

    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180212_161042_yii_posts cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180212_161042_yii_posts cannot be reverted.\n";

        return false;
    }
    */
}
