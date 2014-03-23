<?php

/**
 * This is the model class for table "variables".
 *
 * The followings are the available columns in table 'variables':
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $status
 * @property integer $user_profile_id
 * @property string $created_at
 * @property string $updated_at
 */
class Variable extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'variables';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name, status, user_profile_id', 'required'),
            array('user_profile_id', 'numerical', 'integerOnly' => true),
            array('name, status', 'length', 'max' => 255),
            array('description, created_at, updated_at', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, name, description, status, user_profile_id, created_at, updated_at', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'answers' => array(self::HAS_MANY, 'Answers', 'variable_id'),
            'tag_variables' => array(self::HAS_MANY, 'TagVariables', 'variable_id'),
            'test_variables' => array(self::HAS_MANY, 'TestVariables', 'variable_id'),
            'type_variables' => array(self::HAS_MANY, 'TypeVariables', 'variable_id'),
            'variable_details' => array(self::HAS_MANY, 'VariableDetails', 'variable_id'),
            'user_profile' => array(self::BELONGS_TO, 'UserProfiles', 'user_profile_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'Id',
            'name' => 'Name',
            'description' => 'Description',
            'status' => 'Status',
            'user_profile_id' => 'User Profile',
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

        $criteria->compare('description', $this->description, true);

        $criteria->compare('status', $this->status, true);

        $criteria->compare('user_profile_id', $this->user_profile_id);

        $criteria->compare('created_at', $this->created_at, true);

        $criteria->compare('updated_at', $this->updated_at, true);

        return new CActiveDataProvider('Variable', array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * @return Variable the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}