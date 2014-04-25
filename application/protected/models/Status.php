<?php

/**
 * This is the model class for table "statuses".
 *
 * The followings are the available columns in table 'statuses':
 * @property integer $id
 * @property string $slug
 * @property string $name
 * @property string $descripsion
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $created_at
 * @property string $updated_at
 */
class Status extends AppActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'statuses';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('slug, name', 'required'),
            array('created_by, updated_by', 'numerical', 'integerOnly' => true),
            array('slug, name', 'length', 'max' => 255),
            array('descripsion, created_at, updated_at', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, slug, name, descripsion, created_by, updated_by, created_at, updated_at', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'Access' => array(self::HAS_MANY, 'Access', 'status_id'),
            'Answer' => array(self::HAS_MANY, 'Answer', 'status_id'),
            'Company' => array(self::HAS_MANY, 'Company', 'status_id'),
            'Expert' => array(self::HAS_MANY, 'Expert', 'status_id'),
            'Member' => array(self::HAS_MANY, 'Member', 'status_id'),
            'PositionAccess' => array(self::HAS_MANY, 'PositionAccess', 'status_id'),
            'Position' => array(self::HAS_MANY, 'Position', 'status_id'),
            'Question' => array(self::HAS_MANY, 'Question', 'status_id'),
            'RoleAccess' => array(self::HAS_MANY, 'RoleAccess', 'status_id'),
            'Role' => array(self::HAS_MANY, 'Role', 'status_id'),
            'Tag' => array(self::HAS_MANY, 'Tag', 'status_id'),
            'Test' => array(self::HAS_MANY, 'Test', 'status_id'),
            'Type' => array(self::HAS_MANY, 'Type', 'status_id'),
            'UserTest' => array(self::HAS_MANY, 'UserTest', 'status_id'),
            'User' => array(self::HAS_MANY, 'User', 'status_id'),
            'VariableDetail' => array(self::HAS_MANY, 'VariableDetail', 'status_id'),
            'Variable' => array(self::HAS_MANY, 'Variable', 'status_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'Id',
            'slug' => 'Slug',
            'name' => 'Name',
            'descripsion' => 'Descripsion',
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

        $criteria->compare('slug', $this->slug, true);

        $criteria->compare('name', $this->name, true);

        $criteria->compare('descripsion', $this->descripsion, true);

        $criteria->compare('created_by', $this->created_by);

        $criteria->compare('updated_by', $this->updated_by);

        $criteria->compare('created_at', $this->created_at, true);

        $criteria->compare('updated_at', $this->updated_at, true);

        return new CActiveDataProvider('Status', array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * @return Status the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}