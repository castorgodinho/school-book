<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "division".
 *
 * @property integer $division_id
 * @property string $division_label
 */
class Division extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'division';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['division_label'], 'required'],
            [['division_label'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'division_id' => 'Division ID',
            'division_label' => 'Division Label',
        ];
    }
}
