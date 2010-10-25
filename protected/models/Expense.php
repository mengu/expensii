<?php

/**
 * This is the model class for table "expenses".
 *
 * The followings are the available columns in table 'expenses':
 * @property integer $id
 * @property integer $user_id
 * @property integer $category_id
 * @property string $expense_name
 * @property double $cost
 * @property boolean $paid
 * @property integer $dateline
 *
 * The followings are the available model relations:
 */
class Expense extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @return Expense the static model class
     */
    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'expenses';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('user_id, category_id, expense_name, cost, dateline', 'required'),
            array('user_id, category_id, dateline', 'numerical', 'integerOnly' => true),
            array('cost', 'numerical'),
            array('expense_name', 'length', 'max' => 100),
            array('paid', 'length', 'max' => 1),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, user_id, category_id, expense_name, cost, paid, dateline', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'category' => array(self::BELONGS_TO, 'Category', 'category_id'),
            'user' => array(self::BELONGS_TO, 'User', 'user_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'user_id' => 'User',
            'category_id' => 'Category',
            'expense_name' => 'Expense Name',
            'cost' => 'Cost',
            'dateline' => 'Dateline',
            'paid' => 'Paid'
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('user_id', $this->user_id);
        $criteria->compare('category_id', $this->category_id);
        $criteria->compare('expense_name', $this->expense_name, true);
        $criteria->compare('cost', $this->cost);
        $criteria->compare('dateline', $this->dateline);
        $criteria->compare('paid', $this->paid);

        return new CActiveDataProvider(get_class($this), array(
            'criteria' => $criteria,
        ));
    }

}