<?php

/**
 * This is the model class for table "user_tests".
 *
 * The followings are the available columns in table 'user_tests':
 * @property integer $id
 * @property integer $spent_time
 * @property integer $time_used 
 * @property string $note
 * @property string $status
 * @property integer $show_result
 * @property string $start_date 
 * @property string $end_date 
 * @property string $token 
 * @property integer $user_profile_id
 * @property integer $test_id
 * @property integer $company_id 
 * @property string $created_at
 * @property string $updated_at
 */
class UserTest extends AppActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'user_tests';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
//            array('spent_time', 'required'),
            array('user_profile_id, test_id', 'numerical', 'integerOnly' => true),
            array('status', 'length', 'max' => 255),
            array('spent_time, time_used, start_date, status, end_date, show_result, note, token, created_at, updated_at', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, spent_time, time_used, show_result, start_date, end_date, note, token, status, user_profile_id, test_id, created_at, updated_at', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'test_variables' => array(self::HAS_MANY, 'TestVariable', 'user_test_id'),
            'test' => array(self::BELONGS_TO, 'Test', 'test_id'),
            'user_profile' => array(self::BELONGS_TO, 'UserProfile', 'user_profile_id'),
            'company' => array(self::BELONGS_TO, 'UserProfile', 'company_id'),
            'test_answers' => array(self::HAS_MANY, 'TestAnswer', 'user_test_id'),
            'results' => array(self::HAS_MANY, 'Result', 'user_test_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'Id',
            'spent_time' => 'Spent Time',
            'time_used' => 'Time Used',
            'show_result' => 'Show Result',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'note' => 'Note',
            'status' => 'Status',
            'token' => 'Token',
            'user_profile_id' => 'User Profile',
            'company_id' => 'Company',
            'test_id' => 'Test',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
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
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);

        $criteria->compare('spent_time', $this->spent_time);

        $criteria->compare('time_used', $this->time_used);

        $criteria->compare('show_result', $this->show_result);

        $criteria->compare('note', $this->note, true);

        $criteria->compare('start_date', $this->start_date, true);

        $criteria->compare('end_date', $this->end_date, true);

        $criteria->compare('status', $this->status);

        $criteria->compare('token', $this->token);

        $criteria->compare('user_profile_id', $this->user_profile_id);

        $criteria->compare('test_id', $this->test_id);

        $criteria->compare('company_id', $this->company_id);

        $criteria->compare('created_at', $this->created_at, true);

        $criteria->compare('updated_at', $this->updated_at, true);

        return new CActiveDataProvider('UserTest', array(
            'criteria' => $criteria,
        ));
    }

    public function beforeSave() {
        if (empty($this->spent_time))
            $this->spent_time = new CDbExpression('NULL');

        if (empty($this->start_date))
            $this->start_date = new CDbExpression('NULL');

        if (empty($this->end_date))
            $this->end_date = new CDbExpression('NULL');

        return parent::beforeSave();
    }

    /**
     * Returns the static model of the specified AR class.
     * @return UserTest the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function generateToken($id) {
        $token = md5(rand(0, 99999) . date('Y-m-d H:i:s'));
        $this->updateByPk($id, array('token' => $token));
    }

    public function setExpired() {
        $this->updateAll(
            array('status' => Status::ACTIVE), 
            '((start_date IS NOT NULL AND start_date >= :startDate) OR (end_date IS NOT NULL AND end_date >= :endDate)) AND status = :status', 
            array(':startDate' => date('Y-m-d'), ':endDate' => date('Y-m-d'),':status' => Status::DRAFT));

        $this->updateAll(
            array('status' => Status::INACTIVE), 
            'end_date IS NOT NULL AND end_date < :endDate AND (status = :active OR status = :draf)', 
            array(':endDate' => date('Y-m-d'), ':active' => Status::ACTIVE, ':draf' => Status::DRAFT));
        
        $this->updateAll(
            array('status' => Status::DRAFT), 
            'start_date IS NOT NULL AND start_date > :startDate AND status != :status', 
            array(':startDate' => date('Y-m-d'), ':status' => Status::DRAFT));
        
        return true;
    }

}
