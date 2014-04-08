<?php

/**
 * This is the model class for table "questions".
 *
 * The followings are the available columns in table 'questions':
 * @property integer $id
 * @property string $description
 * @property string $status
 * @property integer $test_id
 * @property string $created_at
 * @property string $updated_at
 */
class Question extends AppActiveRecord {

    private $_alias = 'Question';

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
            array('description', 'required'),
            array('test_id', 'numerical', 'integerOnly' => true),
            array('status', 'length', 'max' => 255),
            array('created_at, updated_at', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, description, status, test_id, created_at, updated_at', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'answers' => array(self::HAS_MANY, 'Answer', 'question_id'),
            'test' => array(self::BELONGS_TO, 'Test', 'test_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'Id',
            'description' => 'Description',
            'status' => 'Status',
            'test_id' => 'Test',
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

        $criteria->compare($this->_alias . '.description', $this->description, true);

        $criteria->compare($this->_alias . '.status', $this->status);

        $criteria->compare($this->_alias . '.test_id', $this->test_id);

        $criteria->compare($this->_alias . '.created_at', $this->created_at, true);

        $criteria->compare($this->_alias . '.updated_at', $this->updated_at, true);

        return new CActiveDataProvider('Question', array(
            'criteria' => $criteria,
            'pagination' => false
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
        $questionModel->answers = $answerList;

        return $questionModel->withRelated->save(false, array('answers'));
    }

}
