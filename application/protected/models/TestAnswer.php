<?php

/**
 * This is the model class for table "test_answers".
 *
 * The followings are the available columns in table 'test_answers':
 * @property integer $id
 * @property integer $user_test_id
 * @property integer $question_id
 * @property integer $answer_id
 * @property integer $total_update
 * @property string $created_at
 * @property string $updated_at
 */
class TestAnswer extends AppActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'test_answers';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('user_test_id, question_id, answer_id, total_update', 'required'),
            array('user_test_id, question_id, answer_id, total_update', 'numerical', 'integerOnly' => true),
            array('created_at, updated_at', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, user_test_id, question_id, answer_id, total_update, created_at, updated_at', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'Answer' => array(self::BELONGS_TO, 'Answer', 'answer_id'),
            'Question' => array(self::BELONGS_TO, 'Question', 'question_id'),
            'UserTest' => array(self::BELONGS_TO, 'UserTest', 'user_test_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'Id',
            'user_test_id' => 'User Test',
            'question_id' => 'Question',
            'answer_id' => 'Answer',
            'total_update' => 'Total Update',
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

        $criteria->compare('user_test_id', $this->user_test_id);

        $criteria->compare('question_id', $this->question_id);

        $criteria->compare('answer_id', $this->answer_id);

        $criteria->compare('total_update', $this->total_update);

        $criteria->compare('created_at', $this->created_at, true);

        $criteria->compare('updated_at', $this->updated_at, true);

        return new CActiveDataProvider('TestAnswer', array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * @return TestAnswer the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function generateToken($token, $id) {
        $number = substr($id, -1, 1);
        return md5($token . substr($token, $number, $number));
    }

    public function getDefaultAnswer($user_test_id = NULL) {
        $model = $this->findAllByAttributes(array(
            'user_test_id' => $user_test_id,
        ));
        return CHtml::listData($model, 'question_id', 'answer_id');
    }

}
