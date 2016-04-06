<?php

/**
 * Ofrece un conjunto de utilidades utilizadas a lo largo del aplicativo.
 */
class Utilidades
{
	public static $_items=array();
	/*Retorna un arreglo de resultados
	* Recibe el modelo de un active record asi: Clase::model()
	* Recibe el nombre de la columna la cual será tomada como clave en el arreglo array[clave]
	* Recibe el nombre de la columna la cual será tomada como descripción en el arreglo array[clave] = descripcion
	* Recibe un filtro en formato de SQL (WHERE)
	*/
	public static function traer($model, $clave, $descripcion, $inicial="", $filtro = '1')
	{
		self::$_items=array();
		
		$criteria = new CDbCriteria;		
		$criteria -> select = array($clave, $descripcion);
		$criteria -> condition = $filtro;
		$criteria->order = $descripcion;
		$results = $model->findAll($criteria);
		
		//self::$_items[""]=$inicial; //Opcion vacía
		
		foreach($results as $result)
			self::$_items[$result->$clave]=$result->$descripcion;
			
		return self::$_items;
	}
}