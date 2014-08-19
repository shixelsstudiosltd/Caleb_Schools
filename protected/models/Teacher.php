<?php

/**
 * This is the model class for table "teacher".
 *
 * The followings are the available columns in table 'teacher':
 * @property integer $teacher_id
 * @property string $firstname
 * @property string $lastname
 * @property string $address
 * @property integer $age
 * @property string $gender
 * @property string $officehours_start
 * @property string $officehour_end
 * @property string $timestamp
 * @property integer $createby
 * @property string $update_date
 * @property string $create_time
 *
 * The followings are the available model relations:
 * @property Attendence[] $attendences
 * @property Content[] $contents
 * @property Marks[] $marks
 * @property Task[] $tasks
 * @property User $teacher
 * @property TeacherGradeSection[] $teacherGradeSections
 */
class Teacher extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'teacher';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('teacher_id', 'required'),
			array('teacher_id, age, createby', 'numerical', 'integerOnly'=>true),
			array('firstname, lastname', 'length', 'max'=>250),
			array('address, gender, timestamp', 'length', 'max'=>45),
			array('officehours_start, officehour_end, update_date, create_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('teacher_id, firstname, lastname, address, age, gender, officehours_start, officehour_end, timestamp, createby, update_date, create_time', 'safe', 'on'=>'search'),
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
			'attendences' => array(self::HAS_MANY, 'Attendence', 'teacher_id'),
			'contents' => array(self::HAS_MANY, 'Content', 'teacher_teacher_id'),
			'marks' => array(self::HAS_MANY, 'Marks', 'teacher_teacher_id'),
			'tasks' => array(self::HAS_MANY, 'Task', 'teacher_teacher_id'),
			'teacher' => array(self::BELONGS_TO, 'User', 'teacher_id'),
			'teacherGradeSections' => array(self::HAS_MANY, 'TeacherGradeSection', 'teacher_teacher_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'teacher_id' => 'Teacher',
			'firstname' => 'Firstname',
			'lastname' => 'Lastname',
			'address' => 'Address',
			'age' => 'Age',
			'gender' => 'Gender',
			'officehours_start' => 'Officehours Start',
			'officehour_end' => 'Officehour End',
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

		$criteria->compare('teacher_id',$this->teacher_id);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('age',$this->age);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('officehours_start',$this->officehours_start,true);
		$criteria->compare('officehour_end',$this->officehour_end,true);
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
	 * @return Teacher the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
