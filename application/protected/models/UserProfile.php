<?php

/**
 * This is the model class for table "user_profiles".
 *
 * The followings are the available columns in table 'user_profiles':
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property boolean $gender
 * @property string $birth_place
 * @property date $birth_date
 * @property string $address
 * @property string $phone
 * @property string $photo
 * @property string $status
 * @property integer $user_id
 * @property integer $role_id
 * @property string $created_at
 * @property string $updated_at
 */
class UserProfile extends AppActiveRecord {

    const MALE = 'Male';
    const FEMALE = 'Female';

    private $_alias = 'Variable';

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'user_profiles';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('first_name', 'required'),
            array('user_id, role_id', 'numerical', 'integerOnly' => true),
            array('first_name, last_name, phone, status', 'length', 'max' => 255),
            array('photo', 'file', 'types' => 'jpg, gif, png', 'allowEmpty' => true),
            array('address, photo, created_at, updated_at', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, first_name, last_name, gender, birth_place, birth_date, address, phone, photo, status, user_id, role_id, created_at, updated_at', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'tags' => array(self::HAS_MANY, 'Tag', 'user_profile_id'),
            'tests' => array(self::HAS_MANY, 'Test', 'user_profile_id'),
            'types' => array(self::HAS_MANY, 'Type', 'user_profile_id'),
            'role' => array(self::BELONGS_TO, 'Role', 'role_id'),
            'user' => array(self::BELONGS_TO, 'User', 'user_id'),
            'user_tests' => array(self::HAS_MANY, 'UserTest', 'user_profile_id'),
            'company_tests' => array(self::HAS_MANY, 'UserTest', 'company_id'),
            'variable_details' => array(self::HAS_MANY, 'VariableDetail', 'user_profile_id'),
            'variables' => array(self::HAS_MANY, 'Variable', 'user_profile_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'Id',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'address' => 'Address',
            'phone' => 'Phone',
            'photo' => 'Photo',
            'status' => 'Status',
            'user_id' => 'User',
            'role_id' => 'Role',
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

        $criteria->compare($this->_alias . '.first_name', $this->first_name, true);

        $criteria->compare($this->_alias . '.last_name', $this->last_name, true);

        $criteria->compare($this->_alias . '.gender', $this->gender, true);

        $criteria->compare($this->_alias . '.birth_place', $this->birth_place, true);

        $criteria->compare($this->_alias . '.birth_date', $this->birth_date, true);

        $criteria->compare($this->_alias . '.address', $this->address, true);

        $criteria->compare($this->_alias . '.phone', $this->phone, true);

        $criteria->compare($this->_alias . '.photo', $this->photo, true);

        $criteria->compare($this->_alias . '.status', $this->status);

        $criteria->compare($this->_alias . '.user_id', $this->user_id);

        $criteria->compare($this->_alias . '.role_id', $this->role_id);

        $criteria->compare($this->_alias . '.created_at', $this->created_at, true);

        $criteria->compare($this->_alias . '.updated_at', $this->updated_at, true);

        $criteria->with = array('user');
        $criteria->together = true;

        return new CActiveDataProvider('UserProfile', array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * @return UserProfile the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function getGender() {
        return array(
            self::MALE,
            self::FEMALE
        );
    }

    public function getUserProfile($user_id = NULL, $role = NULL) {
        return $this->with('role')->findByAttributes(array(
            'user_id' => $user_id, 
            'role.slug' => $role));
    }

    function getUserProfilesByRole($slug) {
        $role = Role::model()->findBySlug($slug);
        return $this->findAllByAttributes(array('role_id' => $role->id));
    }

    function getActiveUserProfilesByRole($slug) {
        $role = Role::model()->findBySlug($slug);
        return $this->findAllByAttributes(array(
            'role_id' => $role->id,
            'status' => Status::ACTIVE));
    }

}
