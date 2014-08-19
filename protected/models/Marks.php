<?php

/**
 * This is the model class for table "marks".
 *
 * The followings are the available columns in table 'marks':
 * @property integer $id
 * @property string $obtained_marks
 * @property integer $task_id
 * @property integer $course_id
 * @property integer $teacher_teacher_id
 * @property integer $student_student_id
 * @property string $timestamp
 * @property integer $createby
 * @property string $update_date
 * @property string $create_time
 *
 * The followings are the available model relations:
 * @property Course $course
 * @property Student $studentStudent
 * @property Task $task
 * @property Teacher $teacherTeacher
 */
class Marks extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'marks';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('task_id, course_id, teacher_teacher_id, student_student_id', 'required'),
			array('task_id, course_id, teacher_teacher_id, student_student_id, createby', 'numerical', 'integerOnly'=>true),
			array('obtained_marks', 'length', 'max'=>45),
			array('timestamp, update_date, create_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, obtained_marks, task_id, course_id, teacher_teacher_id, student_student_id, timestamp, createby, update_date, create_time', 'safe', 'on'=>'search'),
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
			'studentStudent' => array(self::BELONGS_TO, 'Student', 'student_student_id'),
			'task' => array(self::BELONGS_TO, 'Task', 'task_id'),
			'teacherTeacher' => array(self::BELONGS_TO, 'Teacher', 'teacher_teacher_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'obtained_marks' => 'Obtained Marks',
			'task_id' => 'Task',
			'course_id' => 'Course',
			'teacher_teacher_id' => 'Teacher Teacher',
			'student_student_id' => 'Student Student',
			'timestamp' => 'Timestamp',
			'createby' => 'Createby',
			'update_date' => 'Update Date',
			'create_time' => 'Create Time',
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
		$criteria->compare('obtained_marks',$this->obtained_marks,true);
		$criteria->compare('task_id',$this->task_id);
		$criteria->compare('course_id',$this->course_id);
		$criteria->compare('teacher_teacher_id',$this->teacher_teacher_id);
		$criteria->compare('student_student_id',$this->student_student_id);
		$criteria->compare('timestamp',$this->timestamp,true);
		$criteria->compare('createby',$this->createby);
		$criteria->compare('update_date',$this->update_date,true);
		$criteria->compare('create_time',$this->create_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Marks the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
