<?php

/**
 * This is the model class for table "position_accesses".
 *
 * The followings are the available columns in table 'position_accesses':
 * @property integer $id
 * @property integer $status_id
 * @property integer $access_id
 * @property integer $position_id
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $created_at
 * @property string $updated_at
 */
class PositionAccess extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'position_accesses';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('status_id, access_id, position_id', 'required'),
            array('status_id, access_id, position_id, created_by, updated_by', 'numerical', 'integerOnly' => true),
            array('created_at, updated_at', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, status_id, access_id, position_id, created_by, updated_by, created_at, updated_at', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'UpdatedBy' => array(self::BELONGS_TO, 'User', 'updated_by'),
            'Access' => array(self::BELONGS_TO, 'Access', 'access_id'),
            'CreatedBy' => array(self::BELONGS_TO, 'User', 'created_by'),
            'Position' => array(self::BELONGS_TO, 'Position', 'position_id'),
            'Status' => array(self::BELONGS_TO, 'Status', 'status_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'Id',
            'status_id' => 'Status',
            'access_id' => 'Access',
            'position_id' => 'Position',
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

        $criteria->compare('status_id', $this->status_id);

        $criteria->compare('access_id', $this->access_id);

        $criteria->compare('position_id', $this->position_id);

        $criteria->compare('created_by', $this->created_by);

        $criteria->compare('updated_by', $this->updated_by);

        $criteria->compare('created_at', $this->created_at, true);

        $criteria->compare('updated_at', $this->updated_at, true);

        return new CActiveDataProvider('PositionAccess', array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * @return PositionAccess the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}