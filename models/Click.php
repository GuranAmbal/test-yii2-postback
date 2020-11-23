<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "click".
 *
 * @property int $id
 * @property int|null $campaign_id
 * @property string|null $cid
 * @property int|null $click
 * @property string|null $date
 */
class Click extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'click';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['campaign_id', 'click'], 'integer'],
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
            'click' => 'Click',
            'date' => 'Date',
        ];
    }
    public function getInstall()
   {
       return $this->hasMany(Install::className(), ['campaign_id' => 'campaign_id']);
   }
   public function getTrial()
  {
      return $this->hasMany(Trial::className(), ['campaign_id' => 'campaign_id']);
  }
    public static function getAll()
    {


      // build a DB query to get all articles with status = 1
      $data  = self::find()->select('*')
    ->leftJoin('install', '`click`.`campaign_id` = `install`.`campaign_id`')
    ->with('install')
    ->all();


      return $data;

    }
}
