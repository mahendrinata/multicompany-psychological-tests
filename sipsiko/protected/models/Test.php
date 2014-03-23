<?php

/**
 * This is the model class for table "tests".
 *
 * The followings are the available columns in table 'tests':
 * @property integer $id
 * @property string $slug
 * @property string $name
 * @property string $description
 * @property integer $duration
 * @property string $start_date
 * @property string $end_date
 * @property integer $is_public
 * @property string $status
 * @property integer $user_profile_id
 * @property integer $type_id
 * @property integer $parent_id
 * @property string $created_at
 * @property string $updated_at
 */
class Test extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tests';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('slug, name, duration, status, user_profile_id, type_id', 'required'),
            array('duration, is_public, user_profile_id, type_id, parent_id', 'numerical', 'integerOnly' => true),
            array('slug, name, status', 'length', 'max' => 255),
            array('description, start_date, end_date, created_at, updated_at', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, slug, name, description, duration, start_date, end_date, is_public, status, user_profile_id, type_id, parent_id, created_at, updated_at', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'questions' => array(self::HAS_MANY, 'Questions', 'test_id'),
            'parent' => array(self::BELONGS_TO, 'Test', 'parent_id'),
            'tests' => array(self::HAS_MANY, 'Test', 'parent_id'),
            'type' => array(self::BELONGS_TO, 'Types', 'type_id'),
            'user_profile' => array(self::BELONGS_TO, 'UserProfiles', 'user_profile_id'),
            'user_tests' => array(self::HAS_MANY, 'UserTests', 'test_id'),
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
            'description' => 'Description',
            'duration' => 'Duration',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'is_public' => 'Is Public',
            'status' => 'Status',
            'user_profile_id' => 'User Profile',
            'type_id' => 'Type',
            'parent_id' => 'Parent',
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

        $criteria->compare('description', $this->description, true);

        $criteria->compare('duration', $this->duration);

        $criteria->compare('start_date', $this->start_date, true);

        $criteria->compare('end_date', $this->end_date, true);

        $criteria->compare('is_public', $this->is_public);

        $criteria->compare('status', $this->status, true);

        $criteria->compare('user_profile_id', $this->user_profile_id);

        $criteria->compare('type_id', $this->type_id);

        $criteria->compare('parent_id', $this->parent_id);

        $criteria->compare('created_at', $this->created_at, true);

        $criteria->compare('updated_at', $this->updated_at, true);

        return new CActiveDataProvider('Test', array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * @return Test the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}