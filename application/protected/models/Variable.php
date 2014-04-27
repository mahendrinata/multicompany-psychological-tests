<?php

/**
 * This is the model class for table "variables".
 *
 * The followings are the available columns in table 'variables':
 * @property integer $id
 * @property string $slug
 * @property string $name
 * @property string $description
 * @property integer $status_id
 * @property integer $type_id
 * @property integer $expert_id
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $created_at
 * @property string $updated_at
 */
class Variable extends AppActiveRecord {

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
            array('slug, name, status_id, type_id, expert_id', 'required'),
            array('slug', 'unique'),
            array('status_id, type_id, expert_id, created_by, updated_by', 'numerical', 'integerOnly' => true),
            array('slug, name', 'length', 'max' => 255),
            array('description, created_at, updated_at', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, slug, name, description, status_id, type_id, expert_id, created_by, updated_by, created_at, updated_at', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'Answers' => array(self::HAS_MANY, 'Answer', 'variable_id'),
            'Combinations' => array(self::HAS_MANY, 'Combination', 'variable_id'),
            'TestVariables' => array(self::HAS_MANY, 'TestVariable', 'variable_id'),
            'UpdatedBy' => array(self::BELONGS_TO, 'User', 'updated_by'),
            'CreatedBy' => array(self::BELONGS_TO, 'User', 'created_by'),
            'Expert' => array(self::BELONGS_TO, 'Expert', 'expert_id'),
            'Type' => array(self::BELONGS_TO, 'Type', 'type_id'),
            'Status' => array(self::BELONGS_TO, 'Status', 'status_id'),
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
            'status_id' => 'Status',
            'type_id' => 'Type',
            'expert_id' => 'Expert',
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

        $criteria->compare('description', $this->description, true);

        $criteria->compare('status_id', $this->status_id);

        $criteria->compare('type_id', $this->type_id);

        $criteria->compare('expert_id', $this->expert_id);

        $criteria->compare('created_by', $this->created_by);

        $criteria->compare('updated_by', $this->updated_by);

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

    public function beforeSave() {
        $type = Type::model()->findByPk($this->type_id);
        $this->slug = $type->slug . '-' . $this->slugify($this->name);
        return parent::beforeSave();
    }

}
