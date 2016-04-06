<?php

/**
 * This is the model class for table "huesped".
 *
 * The followings are the available columns in table 'huesped':
 * @property integer $id
 * @property integer $documento
 * @property string $nombre
 * @property string $celular
 * @property string $telefono
 * @property string $direccion
 *
 * The followings are the available model relations:
 * @property Comida[] $comidas
 * @property Cuenta[] $cuentas
 * @property Reserva[] $reservas
 */
class Huesped extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'huesped';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('documento', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>40),
			array('celular, telefono', 'length', 'max'=>10),
			array('direccion', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, documento, nombre, celular, telefono, direccion', 'safe', 'on'=>'search'),
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
			'comidas' => array(self::HAS_MANY, 'Comida', 'huesped_id'),
			'cuentas' => array(self::HAS_MANY, 'Cuenta', 'huesped_id'),
			'reservas' => array(self::HAS_MANY, 'Reserva', 'huesped_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'documento' => 'Documento',
			'nombre' => 'Nombre',
			'celular' => 'Celular',
			'telefono' => 'Telefono',
			'direccion' => 'Direccion',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('documento',$this->documento);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('celular',$this->celular,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('direccion',$this->direccion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Huesped the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
