<?php

/**
 * This is the model class for table "members".
 *
 * The followings are the available columns in table 'members':
 * @property integer $id
 * @property string $slug 
 * @property string $first_name
 * @property string $last_name
 * @property integer $gender
 * @property string $birth_place
 * @property string $birth_date
 * @property string $address
 * @property string $phone
 * @property string $photo
 * @property integer $status_id
 * @property integer $user_id
 * @property integer $position_id
 * @property string $created_at
 * @property string $updated_at
 */
class Member extends AppActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'members';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('slug, first_name, gender, status_id', 'required'),
            array('slug', 'unique'),
            array('gender, status_id, user_id', 'numerical', 'integerOnly' => true),
            array('slug, first_name, last_name, birth_place, birth_date, phone, photo', 'length', 'max' => 255),
            array('address, created_at, updated_at', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, slug, first_name, last_name, gender, birth_place, birth_date, address, phone, photo, status_id, user_id, created_at, updated_at', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'User' => array(self::BELONGS_TO, 'User', 'user_id'),
            'UserTests' => array(self::HAS_MANY, 'UserTest', 'member_id'),
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
            'Slug' => 'Slug',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'gender' => 'Gender',
            'birth_place' => 'Birth Place',
            'birth_date' => 'Birth Date',
            'address' => 'Address',
            'phone' => 'Phone',
            'photo' => 'Photo',
            'status_id' => 'Status',
            'user_id' => 'User',
            'position_id' => 'Position',
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

        $criteria->compare('first_name', $this->first_name, true);

        $criteria->compare('last_name', $this->last_name, true);

        $criteria->compare('gender', $this->gender);

        $criteria->compare('birth_place', $this->birth_place, true);

        $criteria->compare('birth_date', $this->birth_date, true);

        $criteria->compare('address', $this->address, true);

        $criteria->compare('phone', $this->phone, true);

        $criteria->compare('photo', $this->photo, true);

        $criteria->compare('status_id', $this->status_id);

        $criteria->compare('user_id', $this->user_id);

        $criteria->compare('position_id', $this->position_id);

        $criteria->compare('created_at', $this->created_at, true);

        $criteria->compare('updated_at', $this->updated_at, true);

        return new CActiveDataProvider('Member', array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * @return Member the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
