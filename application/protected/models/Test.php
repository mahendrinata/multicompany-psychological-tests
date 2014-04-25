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
 * @property integer $publication_id
 * @property integer $show_result
 * @property integer $combination_variable
 * @property integer $status_id
 * @property integer $company_id
 * @property integer $expert_id
 * @property integer $type_id
 * @property integer $parent_id
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $created_at
 * @property string $updated_at
 */
class Test extends AppActiveRecord {

    const STATUS_PRIVATE = 0;
    const STATUS_PUBLIC = 1;

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
            array('slug, name, description, publication_id, show_result, combination_variable, status_id, type_id', 'required'),
            array('duration, publication_id, show_result, combination_variable, status_id, company_id, expert_id, type_id, parent_id, created_by, updated_by', 'numerical', 'integerOnly' => true),
            array('slug, name', 'length', 'max' => 255),
            array('start_date, end_date, created_at, updated_at', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, slug, name, description, duration, start_date, end_date, publication_id, show_result, combination_variable, status_id, company_id, expert_id, type_id, parent_id, created_by, updated_by, created_at, updated_at', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'Question' => array(self::HAS_MANY, 'Question', 'test_id'),
            'UpdatedBy' => array(self::BELONGS_TO, 'User', 'updated_by'),
            'Company' => array(self::BELONGS_TO, 'Company', 'company_id'),
            'Createdby' => array(self::BELONGS_TO, 'User', 'created_by'),
            'Expert' => array(self::BELONGS_TO, 'Expert', 'expert_id'),
            'Parent' => array(self::BELONGS_TO, 'Test', 'parent_id'),
            'Tests' => array(self::HAS_MANY, 'Test', 'parent_id'),
            'Type' => array(self::BELONGS_TO, 'Type', 'type_id'),
            'UserTest' => array(self::HAS_MANY, 'UserTest', 'test_id'),
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
            'duration' => 'Duration',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'publication_id' => 'Publication',
            'show_result' => 'Show Result',
            'combination_variable' => 'Combination Variable',
            'status_id' => 'Status',
            'company_id' => 'Company',
            'expert_id' => 'Expert',
            'type_id' => 'Type',
            'parent_id' => 'Parent',
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

        $criteria->compare('duration', $this->duration);

        $criteria->compare('start_date', $this->start_date, true);

        $criteria->compare('end_date', $this->end_date, true);

        $criteria->compare('publication_id', $this->publication_id);

        $criteria->compare('show_result', $this->show_result);

        $criteria->compare('combination_variable', $this->combination_variable);

        $criteria->compare('status_id', $this->status_id);

        $criteria->compare('company_id', $this->company_id);

        $criteria->compare('expert_id', $this->expert_id);

        $criteria->compare('type_id', $this->type_id);

        $criteria->compare('parent_id', $this->parent_id);

        $criteria->compare('created_by', $this->created_by);

        $criteria->compare('updated_by', $this->updated_by);

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

    public function beforeSave() {
        if (empty($this->duration))
            $this->duration = new CDbExpression('NULL');

        if (empty($this->start_date))
            $this->start_date = new CDbExpression('NULL');

        if (empty($this->end_date))
            $this->end_date = new CDbExpression('NULL');

        return parent::beforeSave();
    }

    public function getListPublication() {
        $list = array(
            self::STATUS_PRIVATE,
            self::STATUS_PUBLIC);
        $output = array();
        for ($i = 0; $i < count($list); $i++) {
            $output[($i + 1)] = $list[$i];
        }
        return $output;
    }

    public function getPublicationIdBySlug($slug){
        return array_search($slug, $this->getListPublication());
    }

    public function getPublicationLabel($status) {
        $label = array(
            'label-danger', 'label-success');

        $publicationList = $this->getPublicationStatus();
        return CHtml::tag("span", array("class" => "label " . $label[$status]), $publicationList[$status]);
    }

    public function generate($id, $user_profile_id) {
        $model = $this->findByPk($id);


        $countTestOfCompany = $this->countByAttributes(array('parent_id' => $model->id, 'user_profile_id' => $user_profile_id));

        $userProfileModel = UserProfile::model()->findByPk($user_profile_id);

        $testModel = new Test;
        $testModel->slug = $model->slug . '-' . $user_profile_id . '-' . ($countTestOfCompany + 1);
        $testModel->name = $model->name . ' ' . ($countTestOfCompany + 1) . ' (' . $userProfileModel->first_name . ')';
        $testModel->description = $model->description;
        $testModel->publication_id = self::STATUS_PRIVATE;
        $testModel->combination_variable = $model->combination_variable;
        $testModel->status = Status::ACTIVE;
        $testModel->type_id = $model->type_id;
        $testModel->company_id = $user_profile_id;
        $testModel->parent_id = $model->id;
        $testModel->save(false);

        $copyTestModel = $this->findBySlug($model->slug . '-' . $user_profile_id . '-' . ($countTestOfCompany + 1));

        foreach ($model->questions as $question) {
            $questionModel = new Question;
            $questionModel->test_id = $copyTestModel->id;
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
            $questionModel->withRelated->save(false, array('Answer'));
        }
        return $testModel;
    }

    public function getTestCompany($id) {
        return $this->findAllByAttributes(array(
                'company_id' => $id,
                'status' => Status::ACTIVE
        ));
    }

    public function setExpired() {
        $this->updateAll(
            array('status' => Status::ACTIVE), '((start_date IS NOT NULL AND start_date >= :startDate) OR (end_date IS NOT NULL AND end_date >= :endDate)) AND status = :status', array(':startDate' => date('Y-m-d'), ':endDate' => date('Y-m-d'), ':status' => Status::DRAFT));

        $this->updateAll(
            array('status' => Status::INACTIVE), 'end_date IS NOT NULL AND end_date < :endDate AND (status = :active OR status = :draf)', array(':endDate' => date('Y-m-d'), ':active' => Status::ACTIVE, ':draf' => Status::DRAFT));

        $this->updateAll(
            array('status' => Status::DRAFT), 'start_date IS NOT NULL AND start_date > :startDate AND status != :status', array(':startDate' => date('Y-m-d'), ':status' => Status::DRAFT));

        return true;
    }

    public function deleteWithQuestionAndAnswer($test_id) {
        $testModel = $this->findByPk($test_id);
        foreach ($testModel->Question as $question) {
            foreach ($question->Answer as $answer) {
                $answer->delete();
            }
            $question->delete();
        }
        return $testModel->delete();
    }

}
