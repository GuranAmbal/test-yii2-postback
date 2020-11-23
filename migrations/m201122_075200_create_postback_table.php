<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%postback}}`.
 */
class m201122_075200_create_postback_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%postback}}', [
            'id' => $this->primaryKey(),
            'campaign_id' => $this->integer(),
            'Clicks' => $this->integer(),
            'date'=>$this->date()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%postback}}');
    }
}
