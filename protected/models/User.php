<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $activkey
 * @property string $create_at
 * @property string $lastvisit_at
 * @property integer $superuser
 * @property integer $status
 * @property string $password_strategy
 * @property string $salt
 * @property integer $requires_new_password
 * @property integer $login_attempts
 * @property integer $login_time
 * @property string $login_ip
 * @property string $activation_key
 * @property string $validation_key
 * @property string $create_time
 * @property string $update_time
 * @property string $reset_token
 *
 * The followings are the available model relations:
 * @property Profiles $profiles
 * @property Student $student
 * @property Teacher $teacher
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, email, create_at', 'required'),
			array('superuser, status, requires_new_password, login_attempts, login_time', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>20),
			array('password, email, activkey, activation_key', 'length', 'max'=>128),
			array('password_strategy', 'length', 'max'=>50),
			array('salt, validation_key', 'length', 'max'=>255),
			array('login_ip', 'length', 'max'=>45),
			array('reset_token', 'length', 'max'=>250),
			array('lastvisit_at, create_time, update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, password, email, activkey, create_at, lastvisit_at, superuser, status, password_strategy, salt, requires_new_password, login_attempts, login_time, login_ip, activation_key, validation_key, create_time, update_time, reset_token', 'safe', 'on'=>'search'),
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
			'profiles' => array(self::HAS_ONE, 'Profiles', 'user_id'),
			'student' => array(self::HAS_ONE, 'Student', 'student_id'),
			'teacher' => array(self::HAS_ONE, 'Teacher', 'teacher_id'),
		);
	}
    public function getFullName()
    {

        return $this->username;
    }


	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'email' => 'Email',
			'activkey' => 'Activkey',
			'create_at' => 'Create At',
			'lastvisit_at' => 'Lastvisit At',
			'superuser' => 'Superuser',
			'status' => 'Status',
			'password_strategy' => 'Password Strategy',
			'salt' => 'Salt',
			'requires_new_password' => 'Requires New Password',
			'login_attempts' => 'Login Attempts',
			'login_time' => 'Login Time',
			'login_ip' => 'Login Ip',
			'activation_key' => 'Activation Key',
			'validation_key' => 'Validation Key',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
			'reset_token' => 'Reset Token',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('activkey',$this->activkey,true);
		$criteria->compare('create_at',$this->create_at,true);
		$criteria->compare('lastvisit_at',$this->lastvisit_at,true);
		$criteria->compare('superuser',$this->superuser);
		$criteria->compare('status',$this->status);
		$criteria->compare('password_strategy',$this->password_strategy,true);
		$criteria->compare('salt',$this->salt,true);
		$criteria->compare('requires_new_password',$this->requires_new_password);
		$criteria->compare('login_attempts',$this->login_attempts);
		$criteria->compare('login_time',$this->login_time);
		$criteria->compare('login_ip',$this->login_ip,true);
		$criteria->compare('activation_key',$this->activation_key,true);
		$criteria->compare('validation_key',$this->validation_key,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('reset_token',$this->reset_token,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
