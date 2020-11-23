<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%install}}`.
 */
class m201123_063432_create_install_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%install}}', [
          'id' => $this->primaryKey(),
          'campaign_id' => $this->integer(),
          'cid' => $this->string()->defaultValue("0974dsye2sy0256"),
          'install' => $this->integer(),
          'date'=>$this->date()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%install}}');
    }
}
