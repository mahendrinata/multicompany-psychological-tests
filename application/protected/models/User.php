<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property integer $status_id
 * @property string $last_login
 * @property string $last_login_ip
 * @property integer $login_count
 * @property string $token
 * @property integer $parent_id
 * @property string $created_at
 * @property string $updated_at
 */
class User extends AppActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'users';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('username, email, password, status_id, login_count', 'required'),
            array('username, email', 'unique'),
            array('status_id, login_count, parent_id', 'numerical', 'integerOnly' => true),
            array('username, email, password, last_login_ip, token', 'length', 'max' => 255),
            array('last_login, created_at, updated_at', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, username, email, password, status_id, last_login, last_login_ip, login_count, token, parent_id, created_at, updated_at', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'ExpertUsers' => array(self::HAS_MANY, 'ExpertUser', 'user_id'),
            'Member' => array(self::HAS_ONE, 'Member', 'user_id'),
            'UserRoles' => array(self::HAS_MANY, 'UserRole', 'user_id'),
            'Parent' => array(self::BELONGS_TO, 'User', 'parent_id'),
            'Users' => array(self::HAS_MANY, 'User', 'parent_id'),
            'CompanyUsers' => array(self::HAS_MANY, 'CompanyUser', 'user_id'),
            'Status' => array(self::BELONGS_TO, 'Status', 'status_id'),
            'CreateAnswers' => array(self::HAS_MANY, 'Answer', 'created_by'),
            'CreateCompanies' => array(self::HAS_MANY, 'Company', 'created_by'),
            'CompanyUsers' => array(self::HAS_MANY, 'CompanyUser', 'user_id'),
            'CreateExperts' => array(self::HAS_MANY, 'Expert', 'created_by'),
            'CreateQuestions' => array(self::HAS_MANY, 'Question', 'created_by'),
            'CreateRoles' => array(self::HAS_MANY, 'Role', 'created_by'),
            'CreateTags' => array(self::HAS_MANY, 'Tag', 'created_by'),
            'CreateTests' => array(self::HAS_MANY, 'Test', 'created_by'),
            'CreateTypes' => array(self::HAS_MANY, 'Type', 'created_by'),
            'CreateUserTests' => array(self::HAS_MANY, 'UserTest', 'created_by'),
            'CreateVariableDetails' => array(self::HAS_MANY, 'VariableDetail', 'created_by'),
            'CreateVariables' => array(self::HAS_MANY, 'Variable', 'created_by'),
            'CreateAccesses' => array(self::HAS_MANY, 'Access', 'created_by'),
            'CreatePositions' => array(self::HAS_MANY, 'Position', 'created_by'),
            'CreatePositionAccesses' => array(self::HAS_MANY, 'PositionAccess', 'created_by'),
            'CreateStatuses' => array(self::HAS_MANY, 'Status', 'created_by'),
            'UpdateAnswers' => array(self::HAS_MANY, 'Answer', 'updated_by'),
            'UpdateCompanies' => array(self::HAS_MANY, 'Company', 'updated_by'),
            'UpdateExperts' => array(self::HAS_MANY, 'Expert', 'updated_by'),
            'UpdateQuestions' => array(self::HAS_MANY, 'Question', 'updated_by'),
            'UpdateRoles' => array(self::HAS_MANY, 'Role', 'updated_by'),
            'UpdateTags' => array(self::HAS_MANY, 'Tag', 'updated_by'),
            'UpdateTests' => array(self::HAS_MANY, 'Test', 'updated_by'),
            'UpdateTypes' => array(self::HAS_MANY, 'Type', 'updated_by'),
            'UpdateUserTests' => array(self::HAS_MANY, 'UserTest', 'updated_by'),
            'UpdateVariableDetails' => array(self::HAS_MANY, 'VariableDetail', 'updated_by'),
            'UpdateVariables' => array(self::HAS_MANY, 'Variable', 'updated_by'),
            'UpdateAccesss' => array(self::HAS_MANY, 'Access', 'updated_by'),
            'UpdatePositions' => array(self::HAS_MANY, 'Position', 'updated_by'),
            'UpdatePositionAccesses' => array(self::HAS_MANY, 'PositionAccess', 'updated_by'),
            'UpdateStatuses' => array(self::HAS_MANY, 'Status', 'updated_by'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'Id',
            'username' => 'Username',
            'email' => 'Email',
            'password' => 'Password',
            'status_id' => 'Status',
            'last_login' => 'Last Login',
            'last_login_ip' => 'Last Login Ip',
            'login_count' => 'Login Count',
            'token' => 'Token',
            'parent_id' => 'Parent',
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

        $criteria->compare('username', $this->username, true);

        $criteria->compare('email', $this->email, true);

        $criteria->compare('password', $this->password, true);

        $criteria->compare('status_id', $this->status_id);

        $criteria->compare('last_login', $this->last_login, true);

        $criteria->compare('last_login_ip', $this->last_login_ip, true);

        $criteria->compare('login_count', $this->login_count);

        $criteria->compare('token', $this->token, true);

        $criteria->compare('parent_id', $this->parent_id);

        $criteria->compare('created_at', $this->created_at, true);

        $criteria->compare('updated_at', $this->updated_at, true);

        return new CActiveDataProvider('User', array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * @return User the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * Checks if the given password is correct.
     * @param string the password to be validated
     * @return boolean whether the password is valid
     */
    public function validatePassword($password) {
        return CPasswordHelper::verifyPassword($password, $this->password);
    }

    /**
     * Generates the password hash.
     * @param string password
     * @return string hash
     */
    public function hashPassword($password) {
        return CPasswordHelper::hashPassword($password);
    }

    public function beforeSave() {
        switch ($this->scenario) {
            case 'insert':
                $this->status_id = Status::model()->getStatusIdBySlug(Status::ACTIVE);
                $this->password = $this->hashPassword($this->password);
                break;
            case 'update':
                if (strlen($this->password) < 60) {
                    $this->password = $this->hashPassword($this->password);
                }
                break;
            default:
                break;
        }
        return parent::beforeSave();
    }

    public function getActiveUserByUsername($username = NULL) {
        return $this->findByAttributes(array(
                'username' => $username,
                'status_id' => Status::model()->getStatusIdBySlug(Status::ACTIVE)));
    }

    public function afterLogin($user) {
        $user->last_login = Yii::app()->Date->now(false);
        $httpRequest = new CHttpRequest;
        $user->last_login_ip = $httpRequest->getUserHostAddress();
        $user->login_count = $user->login_count + 1;

        $user->save();
    }

}
