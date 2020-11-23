<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%trial}}`.
 */
class m201123_063412_create_trial_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%trial}}', [
          'id' => $this->primaryKey(),
          'campaign_id' => $this->integer(),
          'cid' => $this->string()->defaultValue("0974dsye2sy0256"),
          'trial' => $this->integer(),
          'date'=>$this->date()
                  ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%trial}}');
    }
}
