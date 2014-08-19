<?php

/**
 * This is the model class for table "student".
 *
 * The followings are the available columns in table 'student':
 * @property integer $student_id
 * @property string $firstname
 * @property string $lastname
 * @property string $age
 * @property string $gender
 * @property string $address
 * @property string $timestamp
 * @property integer $createby
 * @property string $update_date
 * @property string $create_time
 * @property integer $guardian_id
 *
 * The followings are the available model relations:
 * @property Attendence[] $attendences
 * @property Content[] $contents
 * @property Marks[] $marks
 * @property Guardian $guardian
 * @property User $student
 * @property StudentGradeSection[] $studentGradeSections
 */
class Student extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'student';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('student_id, guardian_id', 'required'),
			array('student_id, createby, guardian_id', 'numerical', 'integerOnly'=>true),
			array('firstname, address', 'length', 'max'=>250),
			array('lastname, age, gender', 'length', 'max'=>45),
			array('timestamp, update_date, create_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('student_id, firstname, lastname, age, gender, address, timestamp, createby, update_date, create_time, guardian_id', 'safe', 'on'=>'search'),
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
			'attendences' => array(self::HAS_MANY, 'Attendence', 'student_id'),
			'contents' => array(self::HAS_MANY, 'Content', 'student_student_id'),
			'marks' => array(self::HAS_MANY, 'Marks', 'student_student_id'),
			'guardian' => array(self::BELONGS_TO, 'Guardian', 'guardian_id'),
			'student' => array(self::BELONGS_TO, 'User', 'student_id'),
			'studentGradeSections' => array(self::HAS_MANY, 'StudentGradeSection', 'student_student_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'student_id' => 'Student',
			'firstname' => 'Firstname',
			'lastname' => 'Lastname',
			'age' => 'Age',
			'gender' => 'Gender',
			'address' => 'Address',
			'timestamp' => 'Timestamp',
			'createby' => 'Createby',
			'update_date' => 'Update Date',
			'create_time' => 'Create Time',
			'guardian_id' => 'Guardian',
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

		$criteria->compare('student_id',$this->student_id);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('age',$this->age,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('timestamp',$this->timestamp,true);
		$criteria->compare('createby',$this->createby);
		$criteria->compare('update_date',$this->update_date,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('guardian_id',$this->guardian_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Student the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
