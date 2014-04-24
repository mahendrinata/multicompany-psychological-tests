<?php

/**
 * This is the model class for table "company_users".
 *
 * The followings are the available columns in table 'company_users':
 * @property integer $id
 * @property integer $company_id
 * @property integer $user_id
 * @property integer $position_id
 * @property integer $status_id
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $created_at
 * @property string $updated_at
 */
class CompanyUser extends AppActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'company_users';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('company_id, user_id, position_id, status_id', 'required'),
            array('company_id, user_id, position_id, status_id, created_by, updated_by', 'numerical', 'integerOnly' => true),
            array('created_at, updated_at', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, company_id, user_id, position_id, status_id, created_by, updated_by, created_at, updated_at', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'UpdatedBy' => array(self::BELONGS_TO, 'User', 'updated_by'),
            'Company' => array(self::BELONGS_TO, 'Company', 'company_id'),
            'CreatedBy' => array(self::BELONGS_TO, 'User', 'created_by'),
            'User' => array(self::BELONGS_TO, 'User', 'user_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'Id',
            'company_id' => 'Company',
            'user_id' => 'User',
            'position_id' => 'Position',
            'status_id' => 'Status',
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

        $criteria->compare('company_id', $this->company_id);

        $criteria->compare('user_id', $this->user_id);

        $criteria->compare('position_id', $this->position_id);

        $criteria->compare('status_id', $this->status_id);

        $criteria->compare('created_by', $this->created_by);

        $criteria->compare('updated_by', $this->updated_by);

        $criteria->compare('created_at', $this->created_at, true);

        $criteria->compare('updated_at', $this->updated_at, true);

        return new CActiveDataProvider('CompanyUser', array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * @return CompanyUser the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
