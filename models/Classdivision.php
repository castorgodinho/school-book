<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "class_division".
 *
 * @property integer $divison_id
 * @property integer $class_id
 * @property integer $status
 */
class Classdivision extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'class_division';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['divison_id', 'class_id', 'status'], 'required'],
            [['divison_id', 'class_id', 'status'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'divison_id' => 'Divison ID',
            'class_id' => 'Class ID',
            'status' => 'Status',
        ];
    }
}
