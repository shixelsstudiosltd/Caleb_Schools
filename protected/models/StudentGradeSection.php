<?php

/**
 * This is the model class for table "student_grade_section".
 *
 * The followings are the available columns in table 'student_grade_section':
 * @property integer $id
 * @property integer $student_student_id
 * @property integer $course_id
 * @property string $timestamp
 * @property integer $createby
 * @property string $update_date
 * @property string $create_time
 * @property integer $grade_section_id
 *
 * The followings are the available model relations:
 * @property Course $course
 * @property GradeSection $gradeSection
 * @property Student $studentStudent
 */
class StudentGradeSection extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'student_grade_section';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('student_student_id, course_id, grade_section_id', 'required'),
			array('student_student_id, course_id, createby, grade_section_id', 'numerical', 'integerOnly'=>true),
			array('timestamp, update_date, create_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, student_student_id, course_id, timestamp, createby, update_date, create_time, grade_section_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'course' => array(self::BELONGS_TO, 'Course', 'course_id'),
			'gradeSection' => array(self::BELONGS_TO, 'GradeSection', 'grade_section_id'),
			'studentStudent' => array(self::BELONGS_TO, 'Student', 'student_student_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'student_student_id' => 'Student Student',
			'course_id' => 'Course',
			'timestamp' => 'Timestamp',
			'createby' => 'Createby',
			'update_date' => 'Update Date',
			'create_time' => 'Create Time',
			'grade_section_id' => 'Grade Section',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('student_student_id',$this->student_student_id);
		$criteria->compare('course_id',$this->course_id);
		$criteria->compare('timestamp',$this->timestamp,true);
		$criteria->compare('createby',$this->createby);
		$criteria->compare('update_date',$this->update_date,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('grade_section_id',$this->grade_section_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return StudentGradeSection the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
