<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "grade".
 *
 * @property integer $grade_id
 * @property string $grade_label
 *
 * @property ClassDivision[] $classDivisions
 * @property Division[] $divisions
 * @property ClassSubject[] $classSubjects
 * @property Subject[] $subjects
 * @property StudentStudiesIn[] $studentStudiesIns
 * @property StudentStudiesSubject[] $studentStudiesSubjects
 */
class Grade extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'grade';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['grade_label'], 'required'],
            [['grade_label'], 'string', 'max' => 10],
            ['grade_label', 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'grade_id' => 'Grade ID',
            'grade_label' => 'Grade Label',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClassDivisions()
    {
        return $this->hasMany(ClassDivision::className(), ['class_id' => 'grade_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDivisions()
    {
        return $this->hasMany(Division::className(), ['division_id' => 'division_id'])->viaTable('class_division', ['class_id' => 'grade_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClassSubjects()
    {
        return $this->hasMany(ClassSubject::className(), ['class_id' => 'grade_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjects()
    {
        return $this->hasMany(Subject::className(), ['subject_id' => 'subject_id'])->viaTable('class_subject', ['class_id' => 'grade_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentStudiesIns()
    {
        return $this->hasMany(StudentStudiesIn::className(), ['class_id' => 'grade_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentStudiesSubjects()
    {
        return $this->hasMany(StudentStudiesSubject::className(), ['class_id' => 'grade_id']);
    }
}
