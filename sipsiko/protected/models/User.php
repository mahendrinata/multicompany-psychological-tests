<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $username
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $address
 * @property string $phone
 * @property string $photo
 * @property string $password
 * @property string $status
 * @property integer $parent_id
 * @property string $created_at
 * @property string $updated_at
 */
class User extends CActiveRecord {

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
        array('username, first_name, email, status', 'required'),
        array('parent_id', 'numerical', 'integerOnly' => true),
        array('username, first_name, last_name, email, phone, password, status', 'length', 'max' => 255),
        array('address, photo, created_at, updated_at', 'safe'),
        // The following rule is used by search().
        // Please remove those attributes that should not be searched.
        array('id, username, first_name, last_name, email, address, phone, photo, password, status, parent_id, created_at, updated_at', 'safe', 'on' => 'search'),
    );
  }

  /**
   * @return array relational rules.
   */
  public function relations() {
    // NOTE: you may need to adjust the relation name and the related
    // class name for the relations automatically generated below.
    return array(
    );
  }

  /**
   * @return array customized attribute labels (name=>label)
   */
  public function attributeLabels() {
    return array(
        'id' => 'Id',
        'username' => 'Username',
        'first_name' => 'First Name',
        'last_name' => 'Last Name',
        'email' => 'Email',
        'address' => 'Address',
        'phone' => 'Phone',
        'photo' => 'Photo',
        'password' => 'Password',
        'status' => 'Status',
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

    $criteria->compare('first_name', $this->first_name, true);

    $criteria->compare('last_name', $this->last_name, true);

    $criteria->compare('email', $this->email, true);

    $criteria->compare('address', $this->address, true);

    $criteria->compare('phone', $this->phone, true);

    $criteria->compare('photo', $this->photo, true);

    $criteria->compare('password', $this->password, true);

    $criteria->compare('status', $this->status, true);

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

}
