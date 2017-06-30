<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "division".
 *
 * @property integer $division_id
 * @property string $division_label
 *
 * @property ClassDivision[] $classDivisions
 * @property Grade[] $classes
 * @property StudentStudiesIn[] $studentStudiesIns
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
            ['division_label', 'unique']
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClassDivisions()
    {
        return $this->hasMany(ClassDivision::className(), ['division_id' => 'division_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClasses()
    {
        return $this->hasMany(Grade::className(), ['grade_id' => 'class_id'])->viaTable('class_division', ['division_id' => 'division_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentStudiesIns()
    {
        return $this->hasMany(StudentStudiesIn::className(), ['division_id' => 'division_id']);
    }
}
