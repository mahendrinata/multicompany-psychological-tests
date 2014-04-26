<?php

/**
 * This is the model class for table "accesses".
 *
 * The followings are the available columns in table 'accesses':
 * @property integer $id
 * @property string $slug
 * @property string $name
 * @property string $url
 * @property string $params 
 * @property integer $status_id
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $created_at
 * @property string $updated_at
 */
class Access extends AppActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'accesses';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('slug, name, url, status_id', 'required'),
            array('slug', 'unique'),
            array('status_id, created_by, updated_by', 'numerical', 'integerOnly' => true),
            array('name, url', 'length', 'max' => 255),
            array('created_at, updated_at', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, slug, name, url, params, status_id, created_by, updated_by, created_at, updated_at', 'safe', 'on' => 'search'),
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
            'CreatedBy' => array(self::BELONGS_TO, 'User', 'created_by'),
            'PositionAccesses' => array(self::HAS_MANY, 'PositionAccess', 'access_id'),
            'RoleAccesses' => array(self::HAS_MANY, 'RoleAccess', 'access_id'),
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
            'url' => 'Url',
            'params' => 'Params',
            'status_id' => 'Status',
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

        $criteria->compare('url', $this->url, true);

        $criteria->compare('params', $this->params);
        
        $criteria->addInCondition('status_id', $this->status_id);

        $criteria->compare('created_by', $this->created_by);

        $criteria->compare('updated_by', $this->updated_by);

        $criteria->compare('created_at', $this->created_at, true);

        $criteria->compare('updated_at', $this->updated_at, true);

        return new CActiveDataProvider('Access', array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * @return Access the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
