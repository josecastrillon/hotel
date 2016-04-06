<?php
/* @var $this TipoHabitacionController */
/* @var $model TipoHabitacion */

$this->breadcrumbs=array(
	'Tipo Habitacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipoHabitacion', 'url'=>array('index')),
	array('label'=>'Manage TipoHabitacion', 'url'=>array('admin')),
);
?>

<h1>Create TipoHabitacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>