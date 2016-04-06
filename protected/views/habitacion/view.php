<?php
/* @var $this HabitacionController */
/* @var $model Habitacion */

$this->breadcrumbs=array(
	'Habitaciones'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Habitacion', 'url'=>array('index')),
	array('label'=>'Crear Habitacion', 'url'=>array('create')),
	array('label'=>'Actualizar Habitacion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Habitacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Habitacion', 'url'=>array('admin')),
);
?>

<h1>Ver Habitación #<?php echo $model->id; ?></h1>
<br/>
<br/>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tipo_habitacion_id',
		'numero',
		'locallizacion',
		'precio_noche',
	),
)); ?>
