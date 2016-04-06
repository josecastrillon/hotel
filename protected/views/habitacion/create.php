<?php
/* @var $this HabitacionController */
/* @var $model Habitacion */

$this->breadcrumbs=array(
	'Habitacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Habitacion', 'url'=>array('index')),
	array('label'=>'Administrar Habitacion', 'url'=>array('admin')),
);
?>

<h1>Crear Habitación</h1>
<br/>
<br/>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>