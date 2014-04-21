<?php

/**
 * This is the model class for table "test_variables".
 *
 * The followings are the available columns in table 'test_variables':
 * @property integer $id
 * @property integer $value
 * @property integer $user_test_id
 * @property integer $variable_id
 * @property string $created_at
 * @property string $updated_at
 */
class TestVariable extends AppActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'test_variables';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('value, user_test_id, variable_id', 'required'),
            array('value, user_test_id, variable_id', 'numerical', 'integerOnly' => true),
            array('created_at, updated_at', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, value, user_test_id, variable_id, created_at, updated_at', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'user_test' => array(self::BELONGS_TO, 'UserTest', 'user_test_id'),
            'variable' => array(self::BELONGS_TO, 'Variable', 'variable_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'Id',
            'value' => 'Value',
            'user_test_id' => 'User Test',
            'variable_id' => 'Variable',
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

        $criteria->compare('value', $this->value);

        $criteria->compare('user_test_id', $this->user_test_id);

        $criteria->compare('variable_id', $this->variable_id);

        $criteria->compare('created_at', $this->created_at, true);

        $criteria->compare('updated_at', $this->updated_at, true);

        return new CActiveDataProvider('TestVariable', array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * @return TestVariable the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function setTestVariable($user_test_id) {
        $userTestModel = UserTest::model()->findByPk($user_test_id);
        $type = $userTestModel->test->type;

        switch ($type->type) {
            case Conclusion::SINGLE:
                $output = ConclusionSingleTest::model()->generate($userTestModel->id);
                break;
            case Conclusion::PAIR:
                $output = ConclusionPairTest::model()->generate($userTestModel->id);
                break;
            case Conclusion::PAIR_ORDERER:
                $output = ConclusionPairOrdererTest::model()->generate($userTestModel->id);
                break;
            case Conclusion::DISC:
                $output = ConclusionDiscTest::model()->generate($userTestModel->id);
                break;
            default:
                $output = false;
                break;
        }
        return $output;
    }

}
