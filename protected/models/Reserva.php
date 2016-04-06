<?php

/**
 * This is the model class for table "reserva".
 *
 * The followings are the available columns in table 'reserva':
 * @property string $id
 * @property integer $huesped_id
 * @property string $habitacion_id
 * @property string $fecha_inicial
 * @property integer $confirmada
 * @property string $fecha_final
 *
 * The followings are the available model relations:
 * @property Habitacion $habitacion
 * @property Huesped $huesped
 */
class Reserva extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'reserva';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('huesped_id, habitacion_id', 'required'),
			array('huesped_id, confirmada', 'numerical', 'integerOnly'=>true),
			array('habitacion_id', 'length', 'max'=>10),
			array('fecha_inicial, fecha_final', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, huesped_id, habitacion_id, fecha_inicial, confirmada, fecha_final', 'safe', 'on'=>'search'),
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
			'habitacion' => array(self::BELONGS_TO, 'Habitacion', 'habitacion_id'),
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
			'habitacion_id' => 'Habitacion',
			'fecha_inicial' => 'Fecha Inicial',
			'confirmada' => 'Confirmada',
			'fecha_final' => 'Fecha Final',
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
		$criteria->compare('habitacion_id',$this->habitacion_id,true);
		$criteria->compare('fecha_inicial',$this->fecha_inicial,true);
		$criteria->compare('confirmada',$this->confirmada);
		$criteria->compare('fecha_final',$this->fecha_final,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Reserva the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
