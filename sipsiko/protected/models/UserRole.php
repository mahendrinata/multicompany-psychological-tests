<?php

/**
 * This is the model class for table "user_roles".
 *
 * The followings are the available columns in table 'user_roles':
 * @property integer $id
 * @property integer $user_id
 * @property integer $role_id
 * @property string $created_at
 * @property string $updated_at
 */
class UserRole extends CActiveRecord {

  /**
   * @return string the associated database table name
   */
  public function tableName() {
    return 'user_roles';
  }

  /**
   * @return array validation rules for model attributes.
   */
  public function rules() {
    // NOTE: you should only define rules for those attributes that
    // will receive user inputs.
    return array(
        array('user_id, role_id', 'required'),
        array('user_id, role_id', 'numerical', 'integerOnly' => true),
        array('created_at, updated_at', 'safe'),
        // The following rule is used by search().
        // Please remove those attributes that should not be searched.
        array('id, user_id, role_id, created_at, updated_at', 'safe', 'on' => 'search'),
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

    $criteria->compare('id', $this->id);

    $criteria->compare('user_id', $this->user_id);

    $criteria->compare('role_id', $this->role_id);

    $criteria->compare('created_at', $this->created_at, true);

    $criteria->compare('updated_at', $this->updated_at, true);

    return new CActiveDataProvider('UserRole', array(
        'criteria' => $criteria,
    ));
  }

  /**
   * Returns the static model of the specified AR class.
   * @return UserRole the static model class
   */
  public static function model($className = __CLASS__) {
    return parent::model($className);
  }

}
