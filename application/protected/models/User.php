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
            'ExpertUser' => array(self::HAS_MANY, 'ExpertUser', 'user_id'),
            'Member' => array(self::HAS_MANY, 'Member', 'user_id'),
            'UserRole' => array(self::HAS_MANY, 'UserRole', 'user_id'),
            'Parent' => array(self::BELONGS_TO, 'User', 'parent_id'),
            'User' => array(self::HAS_MANY, 'User', 'parent_id'),
            'CreateAnswer' => array(self::HAS_MANY, 'Answer', 'created_by'),
            'CreateCompanie' => array(self::HAS_MANY, 'Company', 'created_by'),
            'CompanyUser' => array(self::HAS_MANY, 'CompanyUser', 'user_id'),
            'CreateExpert' => array(self::HAS_MANY, 'Expert', 'created_by'),
            'CreateQuestion' => array(self::HAS_MANY, 'Question', 'created_by'),
            'CreateRole' => array(self::HAS_MANY, 'Role', 'created_by'),
            'CreateTag' => array(self::HAS_MANY, 'Tag', 'created_by'),
            'CreateTest' => array(self::HAS_MANY, 'Test', 'created_by'),
            'CreateType' => array(self::HAS_MANY, 'Type', 'created_by'),
            'CreateUserTest' => array(self::HAS_MANY, 'UserTest', 'created_by'),
            'CreateVariableDetail' => array(self::HAS_MANY, 'VariableDetail', 'created_by'),
            'CreateVariable' => array(self::HAS_MANY, 'Variable', 'created_by'),
            'UpdateAnswer' => array(self::HAS_MANY, 'Answer', 'updated_by'),
            'UpdateCompanie' => array(self::HAS_MANY, 'Company', 'updated_by'),
            'CompanyUser' => array(self::HAS_MANY, 'CompanyUser', 'user_id'),
            'UpdateExpert' => array(self::HAS_MANY, 'Expert', 'updated_by'),
            'UpdateQuestion' => array(self::HAS_MANY, 'Question', 'updated_by'),
            'UpdateRole' => array(self::HAS_MANY, 'Role', 'updated_by'),
            'UpdateTag' => array(self::HAS_MANY, 'Tag', 'updated_by'),
            'UpdateTest' => array(self::HAS_MANY, 'Test', 'updated_by'),
            'UpdateType' => array(self::HAS_MANY, 'Type', 'updated_by'),
            'UpdateUserTest' => array(self::HAS_MANY, 'UserTest', 'updated_by'),
            'UpdateVariableDetail' => array(self::HAS_MANY, 'VariableDetail', 'updated_by'),
            'UpdateVariable' => array(self::HAS_MANY, 'Variable', 'updated_by'),
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
                $this->status = Status::ACTIVE;
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
                'status' => Status::ACTIVE));
    }

    public function afterLogin($user) {
        $user->last_login = Yii::app()->Date->now(false);
        $httpRequest = new CHttpRequest;
        $user->last_login_ip = $httpRequest->getUserHostAddress();
        $user->login_count = $user->login_count + 1;

        $user->save();
    }

}
