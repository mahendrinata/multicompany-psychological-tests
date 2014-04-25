<?php

/**
 * This is the model class for table "questions".
 *
 * The followings are the available columns in table 'questions':
 * @property integer $id
 * @property string $description
 * @property integer $status_id
 * @property integer $test_id
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $created_at
 * @property string $updated_at
 */
class Question extends AppActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'questions';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('description, status_id, test_id', 'required'),
            array('status_id, test_id, created_by, updated_by', 'numerical', 'integerOnly' => true),
            array('created_at, updated_at', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, description, status_id, test_id, created_by, updated_by, created_at, updated_at', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'Answer' => array(self::HAS_MANY, 'Answer', 'question_id'),
            'UpdatedBy' => array(self::BELONGS_TO, 'User', 'updated_by'),
            'CreatedBy' => array(self::BELONGS_TO, 'User', 'created_by'),
            'Test' => array(self::BELONGS_TO, 'Test', 'test_id'),
            'TestAnswer' => array(self::HAS_MANY, 'TestAnswer', 'question_id'),
            'Status' => array(self::BELONGS_TO, 'Status', 'status_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'Id',
            'description' => 'Description',
            'status_id' => 'Status',
            'test_id' => 'Test',
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

        $criteria->compare('description', $this->description, true);

        $criteria->compare('status_id', $this->status_id);

        $criteria->compare('test_id', $this->test_id);

        $criteria->compare('created_by', $this->created_by);

        $criteria->compare('updated_by', $this->updated_by);

        $criteria->compare('created_at', $this->created_at, true);

        $criteria->compare('updated_at', $this->updated_at, true);

        return new CActiveDataProvider('Question', array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * @return Question the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function saveData($data = array()) {
        if (!isset($data['Question']['id']) || empty($data['Question']['id'])) {
            $questionModel = new Question;
        } else {
            $questionModel = $this->findByPk($data['Question']['id']);
            unset($data['Question']['id']);
        }
        $questionModel->attributes = $data['Question'];

        if (isset($data['Question']['answers']) && !empty($data['Question']['answers'])) {
            $answerList = array();
            foreach ($data['Question']['answers'] as $answer) {
                if (!isset($answer['id']) || empty($answer['id'])) {
                    $answerModel = new Answer;
                } else {
                    $answerModel = Answer::model()->findByPk($answer['id']);
                    unset($answer['id']);
                }
                $answerModel->attributes = $answer;
                $answerList[] = $answerModel;
            }
        }
        $questionModel->Answer = $answerList;

        return $questionModel->withRelated->save(false, array('Answer'));
    }

}
