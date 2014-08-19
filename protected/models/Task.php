<?php

/**
 * This is the model class for table "task".
 *
 * The followings are the available columns in table 'task':
 * @property integer $id
 * @property string $title
 * @property string $date_given
 * @property string $due_date
 * @property string $type
 * @property string $taskcol
 * @property string $description
 * @property string $total_marks
 * @property integer $teacher_teacher_id
 * @property integer $content_id
 * @property string $timestamp
 * @property integer $createby
 * @property string $update_date
 * @property string $create_time
 * @property integer $grade_section_id
 *
 * The followings are the available model relations:
 * @property Content[] $contents
 * @property Marks[] $marks
 * @property Content $content
 * @property GradeSection $gradeSection
 * @property Teacher $teacherTeacher
 */
class Task extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'task';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('teacher_teacher_id, content_id, grade_section_id', 'required'),
			array('teacher_teacher_id, content_id, createby, grade_section_id', 'numerical', 'integerOnly'=>true),
			array('title, type, taskcol, total_marks', 'length', 'max'=>45),
			array('date_given, due_date, description, timestamp, update_date, create_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, date_given, due_date, type, taskcol, description, total_marks, teacher_teacher_id, content_id, timestamp, createby, update_date, create_time, grade_section_id', 'safe', 'on'=>'search'),
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
			'contents' => array(self::HAS_MANY, 'Content', 'task_id'),
			'marks' => array(self::HAS_MANY, 'Marks', 'task_id'),
			'content' => array(self::BELONGS_TO, 'Content', 'content_id'),
			'gradeSection' => array(self::BELONGS_TO, 'GradeSection', 'grade_section_id'),
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
			'title' => 'Title',
			'date_given' => 'Date Given',
			'due_date' => 'Due Date',
			'type' => 'Type',
			'taskcol' => 'Taskcol',
			'description' => 'Description',
			'total_marks' => 'Total Marks',
			'teacher_teacher_id' => 'Teacher Teacher',
			'content_id' => 'Content',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('date_given',$this->date_given,true);
		$criteria->compare('due_date',$this->due_date,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('taskcol',$this->taskcol,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('total_marks',$this->total_marks,true);
		$criteria->compare('teacher_teacher_id',$this->teacher_teacher_id);
		$criteria->compare('content_id',$this->content_id);
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
	 * @return Task the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
