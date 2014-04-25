<?php

/**
 * This is the model class for table "experts".
 *
 * The followings are the available columns in table 'experts':
 * @property integer $id
 * @property string $name
 * @property string $address
 * @property string $phone
 * @property string $photo
 * @property integer $status_id
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $created_at
 * @property string $updated_at
 */
class Expert extends AppActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'experts';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name, address, phone, status_id', 'required'),
            array('status_id, created_by, updated_by', 'numerical', 'integerOnly' => true),
            array('name, phone, photo', 'length', 'max' => 255),
            array('created_at, updated_at', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, name, address, phone, photo, status_id, created_by, updated_by, created_at, updated_at', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'ExpertUser' => array(self::HAS_MANY, 'ExpertUser', 'expert_id'),
            'UpdatedBy' => array(self::BELONGS_TO, 'User', 'updated_by'),
            'CreatedBy' => array(self::BELONGS_TO, 'User', 'created_by'),
            'ResultDetail' => array(self::HAS_MANY, 'ResultDetail', 'result_id'),
            'Tag' => array(self::HAS_MANY, 'Tag', 'expert_id'),
            'Test' => array(self::HAS_MANY, 'Test', 'expert_id'),
            'Type' => array(self::HAS_MANY, 'Type', 'expert_id'),
            'UserTest' => array(self::HAS_MANY, 'UserTest', 'expert_id'),
            'VariableDetail' => array(self::HAS_MANY, 'VariableDetail', 'expert_id'),
            'Variable' => array(self::HAS_MANY, 'Variable', 'expert_id'),
            'Status' => array(self::BELONGS_TO, 'Status', 'status_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'Id',
            'name' => 'Name',
            'address' => 'Address',
            'phone' => 'Phone',
            'photo' => 'Photo',
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

        $criteria->compare('name', $this->name, true);

        $criteria->compare('address', $this->address, true);

        $criteria->compare('phone', $this->phone, true);

        $criteria->compare('photo', $this->photo, true);

        $criteria->compare('status_id', $this->status_id);

        $criteria->compare('created_by', $this->created_by);

        $criteria->compare('updated_by', $this->updated_by);

        $criteria->compare('created_at', $this->created_at, true);

        $criteria->compare('updated_at', $this->updated_at, true);

        return new CActiveDataProvider('Expert', array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * @return Expert the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
