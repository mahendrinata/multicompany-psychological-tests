<?php

/**
 * This is the model class for table "result_details".
 *
 * The followings are the available columns in table 'result_details':
 * @property integer $id
 * @property integer $result_id
 * @property integer $variable_detail_id
 * @property string $created_at
 * @property string $updated_at
 */
class ResultDetail extends AppActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'result_details';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('result_id, variable_detail_id', 'required'),
            array('result_id, variable_detail_id', 'numerical', 'integerOnly' => true),
            array('created_at, updated_at', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, result_id, variable_detail_id, created_at, updated_at', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'VariableDetail' => array(self::BELONGS_TO, 'VariableDetail', 'variable_detail_id'),
            'Result' => array(self::BELONGS_TO, 'Expert', 'result_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'Id',
            'result_id' => 'Result',
            'variable_detail_id' => 'Variable Detail',
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

        $criteria->compare('result_id', $this->result_id);

        $criteria->compare('variable_detail_id', $this->variable_detail_id);

        $criteria->compare('created_at', $this->created_at, true);

        $criteria->compare('updated_at', $this->updated_at, true);

        return new CActiveDataProvider('ResultDetail', array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * @return ResultDetail the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
