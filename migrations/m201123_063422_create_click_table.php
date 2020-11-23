<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%click}}`.
 */
class m201123_063422_create_click_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%click}}', [
          'id' => $this->primaryKey(),
          'campaign_id' => $this->integer(),
          'cid' => $this->string()->defaultValue("0974dsye2sy0256"),
          'click' => $this->integer(),
          'date'=>$this->date()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%click}}');
    }
}
