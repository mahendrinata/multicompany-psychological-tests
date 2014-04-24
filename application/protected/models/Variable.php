<?php

/**
 * This is the model class for table "variables".
 *
 * The followings are the available columns in table 'variables':
 * @property integer $id
 * @property string $slug 
 * @property string $name
 * @property string $description
 * @property string $status
 * @property integer $type_id
 * @property integer $user_profile_id
 * @property string $created_at
 * @property string $updated_at
 */
class Variable extends AppActiveRecord {

    private $_alias = 'Variable';

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
            array('slug, name, status, type_id', 'required'),
            array('slug', 'unique'),
            array('type_id, user_profile_id', 'numerical', 'integerOnly' => true),
            array('slug, name, status', 'length', 'max' => 255),
            array('description, created_at, updated_at', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, slug, name, description, status, type_id, user_profile_id, created_at, updated_at', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'answers' => array(self::HAS_MANY, 'Answer', 'variable_id'),
            'combinations' => array(self::MANY_MANY, 'VariableDetail', 'combinations(variable_id, variable_detail_id)'),
            'test_variables' => array(self::HAS_MANY, 'TestVariable', 'variable_id'),
            'type' => array(self::BELONGS_TO, 'Type', 'type_id'),
            'user_profile' => array(self::BELONGS_TO, 'UserProfile', 'user_profile_id'),
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
        $criteria->alias = $this->_alias;

        $criteria->compare($this->_alias . '.id', $this->id);

        $criteria->compare($this->_alias . '.slug', $this->slug, true);

        $criteria->compare($this->_alias . '.name', $this->name, true);

        $criteria->compare($this->_alias . '.description', $this->description, true);

        $criteria->compare($this->_alias . '.status', $this->status);

        $criteria->compare($this->_alias . '.type_id', $this->type_id);

        $criteria->compare($this->_alias . '.user_profile_id', $this->user_profile_id);

        $criteria->compare($this->_alias . '.created_at', $this->created_at, true);

        $criteria->compare($this->_alias . '.updated_at', $this->updated_at, true);

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

    public function beforeSave() {
        $type = Type::model()->findByPk($this->type_id);
        $this->slug = $type->slug . '-' . $this->slugify($this->name);
        return parent::beforeSave();
    }

}
