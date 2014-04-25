<?php

/**
 * This is the model class for table "user_tests".
 *
 * The followings are the available columns in table 'user_tests':
 * @property integer $id
 * @property integer $spent_time
 * @property string $note
 * @property integer $show_result
 * @property integer $time_used
 * @property string $start_date
 * @property string $end_date
 * @property integer $status_id
 * @property string $token
 * @property integer $test_id
 * @property integer $member_id
 * @property integer $expert_id
 * @property integer $company_id
 * @property integer $created_by
 * @property integer $updated_by
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
            array('show_result, time_used, status_id', 'required'),
            array('spent_time, show_result, time_used, status_id, test_id, member_id, expert_id, company_id, created_by, updated_by', 'numerical', 'integerOnly' => true),
            array('token', 'length', 'max' => 255),
            array('note, start_date, end_date, created_at, updated_at', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, spent_time, note, show_result, time_used, start_date, end_date, status_id, token, test_id, member_id, expert_id, company_id, created_by, updated_by, created_at, updated_at', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'Result' => array(self::HAS_MANY, 'Result', 'user_test_id'),
            'TestAnswer' => array(self::HAS_MANY, 'TestAnswer', 'user_test_id'),
            'TestVariable' => array(self::HAS_MANY, 'TestVariable', 'user_test_id'),
            'UpdatedBy' => array(self::BELONGS_TO, 'User', 'updated_by'),
            'Company' => array(self::BELONGS_TO, 'Company', 'company_id'),
            'CreatedBy' => array(self::BELONGS_TO, 'User', 'created_by'),
            'Expert' => array(self::BELONGS_TO, 'Expert', 'expert_id'),
            'Member' => array(self::BELONGS_TO, 'Member', 'member_id'),
            'Test' => array(self::BELONGS_TO, 'Test', 'test_id'),
            'Status' => array(self::BELONGS_TO, 'Status', 'status_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'Id',
            'spent_time' => 'Spent Time',
            'note' => 'Note',
            'show_result' => 'Show Result',
            'time_used' => 'Time Used',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'status_id' => 'Status',
            'token' => 'Token',
            'test_id' => 'Test',
            'member_id' => 'Member',
            'expert_id' => 'Expert',
            'company_id' => 'Company',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
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

        $criteria->compare('note', $this->note, true);

        $criteria->compare('show_result', $this->show_result);

        $criteria->compare('time_used', $this->time_used);

        $criteria->compare('start_date', $this->start_date, true);

        $criteria->compare('end_date', $this->end_date, true);

        $criteria->compare('status_id', $this->status_id);

        $criteria->compare('token', $this->token, true);

        $criteria->compare('test_id', $this->test_id);

        $criteria->compare('member_id', $this->member_id);

        $criteria->compare('expert_id', $this->expert_id);

        $criteria->compare('company_id', $this->company_id);

        $criteria->compare('created_by', $this->created_by);

        $criteria->compare('updated_by', $this->updated_by);

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
            array('status' => Status::ACTIVE), '((start_date IS NOT NULL AND start_date >= :startDate) OR (end_date IS NOT NULL AND end_date >= :endDate)) AND status = :status', array(':startDate' => date('Y-m-d'), ':endDate' => date('Y-m-d'), ':status' => Status::DRAFT));

        $this->updateAll(
            array('status' => Status::INACTIVE), 'end_date IS NOT NULL AND end_date < :endDate AND (status = :active OR status = :draf)', array(':endDate' => date('Y-m-d'), ':active' => Status::ACTIVE, ':draf' => Status::DRAFT));

        $this->updateAll(
            array('status' => Status::DRAFT), 'start_date IS NOT NULL AND start_date > :startDate AND status != :status', array(':startDate' => date('Y-m-d'), ':status' => Status::DRAFT));

        return true;
    }

}
