<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "install".
 *
 * @property int $id
 * @property int|null $campaign_id
 * @property string|null $cid
 * @property int|null $install
 * @property string|null $date
 */
class Install extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'install';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['campaign_id', 'install'], 'integer'],
            [['date'], 'safe'],
            [['cid'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'campaign_id' => 'Campaign ID',
            'cid' => 'Cid',
            'install' => 'Install',
            'date' => 'Date',
        ];
    }
}
