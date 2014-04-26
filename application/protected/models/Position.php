<?php

/**
 * This is the model class for table "positions".
 *
 * The followings are the available columns in table 'positions':
 * @property integer $id
 * @property string $slug
 * @property string $name
 * @property string $description
 * @property integer $status_id
 * @property integer $role_id
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $created_at
 * @property string $updated_at
 */
class Position extends AppActiveRecord {
    
    const ADMIN = 'ADMIN';
    const OWNER = 'OWNER';
    const EMPLOYEE = 'EMPLOYEE';
    const MEMBER = 'MEMBER';

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'positions';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('slug, name, status_id, role_id', 'required'),
            array('status_id, role_id, created_by, updated_by', 'numerical', 'integerOnly' => true),
            array('slug, name', 'length', 'max' => 255),
            array('description, created_at, updated_at', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, slug, name, description, status_id, role_id, created_by, updated_by, created_at, updated_at', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'PositionAccesses' => array(self::HAS_MANY, 'PositionAccess', 'position_id'),
            'UpdatedBy' => array(self::BELONGS_TO, 'User', 'updated_by'),
            'CreatedBy' => array(self::BELONGS_TO, 'User', 'created_by'),
            'Role' => array(self::BELONGS_TO, 'Role', 'role_id'),
            'Members' => array(self::HAS_MANY, 'Member', 'position_id'),
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
            'status_id' => 'Status',
            'role_id' => 'Role',
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

        $criteria->compare('status_id', $this->status_id);

        $criteria->compare('role_id', $this->role_id);

        $criteria->compare('created_by', $this->created_by);

        $criteria->compare('updated_by', $this->updated_by);

        $criteria->compare('created_at', $this->created_at, true);

        $criteria->compare('updated_at', $this->updated_at, true);

        return new CActiveDataProvider('Position', array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * @return Position the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
    
    public function getListPosition() {
        $list = array(
            self::ADMIN,
            self::OWNER,
            self::EMPLOYEE,
            self::MEMBER,
        );
        $output = array();
        for ($i = 1; $i < count($list); $i++) {
            $output[($i + 1)] = $list[$i];
        }
        return $output;
    }

    public function getMapPosition() {
        $map = array();
        foreach ($this->getListPosition() as $role) {
            $map[$role] = $role;
        }
        return $map;
    }

    public function getPositionIdBySlug($slug){
        return array_search($slug, $this->getListPosition());
    }

}