<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "privileges".
 *
 * @property integer privilege_id
 * @property integer $aco_id
 * @property integer $group_id
 * @property integer $status
 * @property integer $created_at
 * @property integer $modified_at
 */
class Privilege extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'privileges';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['aco_id', 'group_id', 'status', 'created_at', 'modified_at'], 'required'],
            [['aco_id', 'group_id', 'status', 'created_at', 'modified_at'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'privilege_id' => Yii::t('app', 'Privilege ID'),
            'aco_id' => Yii::t('app', 'Aco ID'),
            'group_id' => Yii::t('app', 'Group ID'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'modified_at' => Yii::t('app', 'Modified At'),
        ];
    }
}
