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
 * @property integer $is_expert 
 * @property integer $is_public
 * @property string $status
 * @property integer $combination_variable 
 * @property integer $user_profile_id
 * @property integer $type_id
 * @property integer $parent_id
 * @property string $created_at
 * @property string $updated_at
 */
class Test extends AppActiveRecord {

    const IS_PRIVATE = 'PRIVATE';
    const IS_PUBLIC = 'PUBLIC';

    private $_alias = 'Test';

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
            array('slug, name, is_public, combination_variable', 'required'),
            array('slug', 'unique'),
            array('duration, is_public, combination_variable, user_profile_id, type_id, parent_id', 'numerical', 'integerOnly' => true),
            array('slug, name, status', 'length', 'max' => 255),
            array('description, start_date, end_date, is_expert, created_at, updated_at', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, slug, name, description, duration, start_date, end_date, is_public, combination_variable, status, user_profile_id, type_id, parent_id, created_at, updated_at', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'questions' => array(self::HAS_MANY, 'Question', 'test_id'),
            'parent' => array(self::BELONGS_TO, 'Test', 'parent_id'),
            'tests' => array(self::HAS_MANY, 'Test', 'parent_id'),
            'type' => array(self::BELONGS_TO, 'Type', 'type_id'),
            'user_profile' => array(self::BELONGS_TO, 'UserProfile', 'user_profile_id'),
            'user_tests' => array(self::HAS_MANY, 'UserTest', 'test_id'),
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
            'is_public' => 'Publication',
            'combination_variable' => 'Combination Variable',
            'status' => 'Status',
            'user_profile_id' => 'User Profile',
            'type_id' => 'Type',
            'parent_id' => 'Created By',
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

        $criteria->compare($this->_alias . '.duration', $this->duration);

        $criteria->compare($this->_alias . '.start_date', $this->start_date, true);

        $criteria->compare($this->_alias . '.end_date', $this->end_date, true);

        $criteria->compare($this->_alias . '.is_expert', $this->is_expert);

        $criteria->compare($this->_alias . '.combination_variable', $this->combination_variable);

        $criteria->compare($this->_alias . '.is_public', $this->is_public);

        $criteria->compare($this->_alias . '.status', $this->status, true);

        $criteria->compare($this->_alias . '.user_profile_id', $this->user_profile_id);

        $criteria->compare($this->_alias . '.type_id', $this->type_id);

        $criteria->compare($this->_alias . '.parent_id', $this->parent_id);

        $criteria->compare($this->_alias . '.created_at', $this->created_at, true);

        $criteria->compare($this->_alias . '.updated_at', $this->updated_at, true);

        $criteria->with = array('type');
        $criteria->together = true;
        
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

    public function getPublicationStatus() {
        return array(
            self::IS_PRIVATE,
            self::IS_PUBLIC);
    }

    public function generate($id, $user_profile_id) {
        $model = $this->with('questions', 'questions.answers')->findBySlug($id);
   
        if(!empty($this->findBySlug($model->slug . '-' . $user_profile_id))){
            return false;
        }
        
        $testModel = new Test;
        $testModel->slug = $model->slug . '-' . $user_profile_id;
        $testModel->name = $model->name;
        $testModel->description = $model->description;
        $testModel->is_public = false;
        $testModel->combination_variable = $model->combination_variable;
        $testModel->status = Status::ACTIVE;
        $testModel->type_id = $model->type_id;
        $testModel->user_profile_id = $user_profile_id;
        $testModel->parent_id = $model->id;

        $questionList = array();
        foreach ($model->questions as $question) {
            $questionModel = new Question;
            $questionModel->description = $question->description;
            $questionModel->status = $question->status;
            
            $answerList = array();
            foreach ($question->answers as $answer) {
                $answerModel = new Answer;
                $answerModel->description = $answer->description;
                $answerModel->status = $answer->status;
                $answerModel->value = $answer->value;
                $answerModel->variable_id = $answer->variable_id;
                $answerList[] = $answerModel;
            }
            $questionModel->answers = $answerList;
            $questionList[] = $questionModel;
        }
        $testModel->questions = $questionList;
        
        return $testModel->withRelated->save(false, array('questions', 'questions.answers'));;
    }

}
