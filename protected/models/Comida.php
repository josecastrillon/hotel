<?php

/**
 * This is the model class for table "comida".
 *
 * The followings are the available columns in table 'comida':
 * @property string $id
 * @property integer $huesped_id
 * @property string $cocinero_id
 * @property string $nombre
 * @property string $precio
 *
 * The followings are the available model relations:
 * @property Cocinero $cocinero
 * @property Huesped $huesped
 */
class Comida extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'comida';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('huesped_id, cocinero_id', 'required'),
			array('huesped_id', 'numerical', 'integerOnly'=>true),
			array('cocinero_id, precio', 'length', 'max'=>10),
			array('nombre', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, huesped_id, cocinero_id, nombre, precio', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'cocinero' => array(self::BELONGS_TO, 'Cocinero', 'cocinero_id'),
			'huesped' => array(self::BELONGS_TO, 'Huesped', 'huesped_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'huesped_id' => 'Huesped',
			'cocinero_id' => 'Cocinero',
			'nombre' => 'Nombre',
			'precio' => 'Precio',
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
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('huesped_id',$this->huesped_id);
		$criteria->compare('cocinero_id',$this->cocinero_id,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('precio',$this->precio,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Comida the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
