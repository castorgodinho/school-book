<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "class".
 *
 * @property integer $class_id
 * @property string $class_label
 *
 * @property SubjectClass[] $subjectClasses
 */
class SchoolClass extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'class';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class_label'], 'required'],
            [['class_label'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'class_id' => 'Class ID',
            'class_label' => 'Class Label',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjectClasses()
    {
        return $this->hasMany(SubjectClass::className(), ['class_id' => 'class_id']);
    }
}
