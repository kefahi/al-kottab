<?php

/**
 * This is the model class for table "messages".
 *
 * The followings are the available columns in table 'messages':
 * @property integer $id
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $priority
 * @property integer $severity
 * @property integer $sender_id
 * @property integer $recipient_id
 * @property string $body
 * @property string $subject
 * @property integer $delivery_status
 * @property integer $delivery_method
 *
 * The followings are the available model relations:
 * @property Users $recipient
 * @property Users $sender
 */
class Messages extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'messages';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created_at, updated_at, sender_id, recipient_id, body, subject, delivery_status, delivery_method', 'required'),
			array('created_at, updated_at, priority, severity, sender_id, recipient_id, delivery_status, delivery_method', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, created_at, updated_at, priority, severity, sender_id, recipient_id, body, subject, delivery_status, delivery_method', 'safe', 'on'=>'search'),
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
			'recipient' => array(self::BELONGS_TO, 'Users', 'recipient_id'),
			'sender' => array(self::BELONGS_TO, 'Users', 'sender_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
			'priority' => 'Priority',
			'severity' => 'Severity',
			'sender_id' => 'Sender',
			'recipient_id' => 'Recipient',
			'body' => 'Body',
			'subject' => 'Subject',
			'delivery_status' => 'Delivery Status',
			'delivery_method' => 'Delivery Method',
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
		$criteria->compare('created_at',$this->created_at);
		$criteria->compare('updated_at',$this->updated_at);
		$criteria->compare('priority',$this->priority);
		$criteria->compare('severity',$this->severity);
		$criteria->compare('sender_id',$this->sender_id);
		$criteria->compare('recipient_id',$this->recipient_id);
		$criteria->compare('body',$this->body,true);
		$criteria->compare('subject',$this->subject,true);
		$criteria->compare('delivery_status',$this->delivery_status);
		$criteria->compare('delivery_method',$this->delivery_method);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Messages the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
