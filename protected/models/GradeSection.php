<?php

/**
 * This is the model class for table "grade_section".
 *
 * The followings are the available columns in table 'grade_section':
 * @property integer $id
 * @property integer $section_id
 * @property string $timestamp
 * @property integer $createby
 * @property string $update_date
 * @property string $create_time
 * @property integer $grade_id
 *
 * The followings are the available model relations:
 * @property Grade $grade
 * @property Section $section
 * @property StudentGradeSection[] $studentGradeSections
 * @property Task[] $tasks
 * @property TeacherGradeSection[] $teacherGradeSections
 */
class GradeSection extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'grade_section';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('section_id, grade_id', 'required'),
			array('section_id, createby, grade_id', 'numerical', 'integerOnly'=>true),
			array('timestamp, update_date, create_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, section_id, timestamp, createby, update_date, create_time, grade_id', 'safe', 'on'=>'search'),
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
			'grade' => array(self::BELONGS_TO, 'Grade', 'grade_id'),
			'section' => array(self::BELONGS_TO, 'Section', 'section_id'),
			'studentGradeSections' => array(self::HAS_MANY, 'StudentGradeSection', 'grade_section_id'),
			'tasks' => array(self::HAS_MANY, 'Task', 'grade_section_id'),
			'teacherGradeSections' => array(self::HAS_MANY, 'TeacherGradeSection', 'grade_section_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'section_id' => 'Section',
			'timestamp' => 'Timestamp',
			'createby' => 'Createby',
			'update_date' => 'Update Date',
			'create_time' => 'Create Time',
			'grade_id' => 'Grade',
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
		$criteria->compare('section_id',$this->section_id);
		$criteria->compare('timestamp',$this->timestamp,true);
		$criteria->compare('createby',$this->createby);
		$criteria->compare('update_date',$this->update_date,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('grade_id',$this->grade_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GradeSection the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
