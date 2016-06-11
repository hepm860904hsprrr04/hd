<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "acos".
 *
 * @property integer $aco_id
 * @property string $description
 * @property string $url
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Aco extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'acos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description', 'url', 'status', 'created_at', 'updated_at'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['description'], 'string', 'max' => 32],
            [['url'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'aco_id' => Yii::t('app', 'Aco ID'),
            'description' => Yii::t('app', 'Description'),
            'url' => Yii::t('app', 'Url'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
}
