<?php

/**
 * This is the model class for table "variable_details".
 *
 * The followings are the available columns in table 'variable_details':
 * @property integer $id
 * @property string $slug
 * @property string $shortness
 * @property string $name
 * @property string $description
 * @property string $status
 * @property integer $user_profile_id
 * @property string $created_at
 * @property string $updated_at
 */
class VariableDetail extends AppActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'variable_details';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('slug, shortness, name, description, status', 'required'),
            array('user_profile_id', 'numerical', 'integerOnly' => true),
            array('status', 'length', 'max' => 255),
            array('description, created_at, updated_at', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, shortness, name, description, status, user_profile_id, created_at, updated_at', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'combinations' => array(self::MANY_MANY, 'Variable', 'combinations(variable_detail_id, variable_id)'),
            'user_profile' => array(self::BELONGS_TO, 'UserProfile', 'user_profile_id'),
            'tag_variables' => array(self::MANY_MANY, 'Tag', 'tag_variables(variable_detail_id, tag_id)'),
            'result' => array(self::BELONGS_TO, 'Result', array('slug' => 'variable_detail_slug')),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'Id',
            'slug' => 'Slug',
            'shortness' => 'Shortness',
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

        $criteria->compare('slug', $this->slug, true);

        $criteria->compare('shortness', $this->shortness, true);

        $criteria->compare('name', $this->name, true);

        $criteria->compare('description', $this->description, true);

        $criteria->compare('status', $this->status);

        $criteria->compare('user_profile_id', $this->user_profile_id);

        $criteria->compare('created_at', $this->created_at, true);

        $criteria->compare('updated_at', $this->updated_at, true);

        return new CActiveDataProvider('VariableDetail', array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * @return VariableDetail the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function deleteWithCombination($variable_detail_id) {
        $variableDetailModel = $this->findByPk($variable_detail_id);
        foreach ($variableDetailModel->combinations as $combination) {
            $combination->delete();
        }
        return $variableDetailModel->delete();
    }

}
