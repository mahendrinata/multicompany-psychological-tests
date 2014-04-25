<?php

/**
 * This is the model class for table "types".
 *
 * The followings are the available columns in table 'types':
 * @property integer $id
 * @property string $slug
 * @property string $name
 * @property string $description
 * @property integer $status_id
 * @property integer $conclusion_id
 * @property integer $template_test_id
 * @property integer $expert_id
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $created_at
 * @property string $updated_at
 */
class Type extends AppActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'types';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('slug, name, status_id, conclusion_id, template_test_id, expert_id', 'required'),
            array('status_id, conclusion_id, template_test_id, expert_id, created_by, updated_by', 'numerical', 'integerOnly' => true),
            array('slug, name', 'length', 'max' => 255),
            array('description, created_at, updated_at', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, slug, name, description, status_id, conclusion_id, template_test_id, expert_id, created_by, updated_by, created_at, updated_at', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'Test' => array(self::HAS_MANY, 'Test', 'type_id'),
            'UpdatedBy' => array(self::BELONGS_TO, 'User', 'updated_by'),
            'CreatedBy' => array(self::BELONGS_TO, 'User', 'created_by'),
            'Expert' => array(self::BELONGS_TO, 'Expert', 'expert_id'),
            'Variable' => array(self::HAS_MANY, 'Variable', 'type_id'),
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
            'conclusion_id' => 'Conclusion',
            'template_test_id' => 'Template Test',
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

        $criteria->compare('conclusion_id', $this->conclusion_id);

        $criteria->compare('template_test_id', $this->template_test_id);

        $criteria->compare('expert_id', $this->expert_id);

        $criteria->compare('created_by', $this->created_by);

        $criteria->compare('updated_by', $this->updated_by);

        $criteria->compare('created_at', $this->created_at, true);

        $criteria->compare('updated_at', $this->updated_at, true);

        return new CActiveDataProvider('Type', array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * @return Type the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function getTypeVariableList() {
        $types = $this->with('variables')->findAll();
        $output = array();
        $iterator = 0;
        foreach ($types as $type) {
            foreach ($type->Variable as $variable) {
                $output[$iterator][$type->name][$variable->id] = $variable->name;
            }
            $iterator++;
        }
        return $output;
    }

}
