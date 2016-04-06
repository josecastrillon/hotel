<?php

/**
 * This is the model class for table "habitacion".
 *
 * The followings are the available columns in table 'habitacion':
 * @property string $id
 * @property string $tipo_habitacion_id
 * @property string $numero
 * @property string $locallizacion
 * @property string $precio_noche
 *
 * The followings are the available model relations:
 * @property TipoHabitacion $tipoHabitacion
 * @property Reserva[] $reservas
 */
class Habitacion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'habitacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipo_habitacion_id, numero, locallizacion', 'required'),
			array('tipo_habitacion_id, numero, precio_noche', 'length', 'max'=>10),
			array('locallizacion', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, tipo_habitacion_id, numero, locallizacion, precio_noche', 'safe', 'on'=>'search'),
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
			'tipoHabitacion' => array(self::BELONGS_TO, 'TipoHabitacion', 'tipo_habitacion_id'),
			'reservas' => array(self::HAS_MANY, 'Reserva', 'habitacion_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'tipo_habitacion_id' => 'Tipo Habitacion',
			'numero' => 'Numero',
			'locallizacion' => 'Locallizacion',
			'precio_noche' => 'Precio Noche',
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
		$criteria->compare('tipo_habitacion_id',$this->tipo_habitacion_id,true);
		$criteria->compare('numero',$this->numero,true);
		$criteria->compare('locallizacion',$this->locallizacion,true);
		$criteria->compare('precio_noche',$this->precio_noche,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Habitacion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
