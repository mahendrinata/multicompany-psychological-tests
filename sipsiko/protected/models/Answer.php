<?php

/**
 * This is the model class for table "answers".
 *
 * The followings are the available columns in table 'answers':
 * @property integer $id
 * @property string $description
 * @property integer $value
 * @property string $status
 * @property integer $question_id
 * @property integer $variable_id
 * @property string $created_at
 * @property string $updated_at
 */
class Answer extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'answers';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('description, value, status, question_id, variable_id', 'required'),
            array('value, question_id, variable_id', 'numerical', 'integerOnly' => true),
            array('status', 'length', 'max' => 255),
            array('created_at, updated_at', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, description, value, status, question_id, variable_id, created_at, updated_at', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'question' => array(self::BELONGS_TO, 'Questions', 'question_id'),
            'variable' => array(self::BELONGS_TO, 'Variables', 'variable_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'Id',
            'description' => 'Description',
            'value' => 'Value',
            'status' => 'Status',
            'question_id' => 'Question',
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

        $criteria->compare('description', $this->description, true);

        $criteria->compare('value', $this->value);

        $criteria->compare('status', $this->status, true);

        $criteria->compare('question_id', $this->question_id);

        $criteria->compare('variable_id', $this->variable_id);

        $criteria->compare('created_at', $this->created_at, true);

        $criteria->compare('updated_at', $this->updated_at, true);

        return new CActiveDataProvider('Answer', array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * @return Answer the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
