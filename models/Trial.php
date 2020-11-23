<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trial".
 *
 * @property int $id
 * @property int|null $campaign_id
 * @property string|null $cid
 * @property int|null $trial
 * @property string|null $date
 */
class Trial extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'trial';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['campaign_id', 'trial'], 'integer'],
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
            'trial' => 'Trial',
            'date' => 'Date',
        ];
    }
}
