<?php

/**
 * This is the model class for table "tag_variables".
 *
 * The followings are the available columns in table 'tag_variables':
 * @property integer $id
 * @property integer $tag_id
 * @property integer $variable_id
 * @property string $created_at
 * @property string $updated_at
 */
class TagVariable extends AppActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tag_variables';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('tag_id, variable_id', 'required'),
            array('tag_id, variable_id', 'numerical', 'integerOnly' => true),
            array('created_at, updated_at', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, tag_id, variable_id, created_at, updated_at', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'tag' => array(self::BELONGS_TO, 'Tag', 'tag_id'),
            'variable' => array(self::BELONGS_TO, 'Variable', 'variable_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'Id',
            'tag_id' => 'Tag',
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

        $criteria->compare('tag_id', $this->tag_id);

        $criteria->compare('variable_id', $this->variable_id);

        $criteria->compare('created_at', $this->created_at, true);

        $criteria->compare('updated_at', $this->updated_at, true);

        return new CActiveDataProvider('TagVariable', array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * @return TagVariable the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
