<?php
/* @var $this ReservaController */
/* @var $model Reserva */

$this->breadcrumbs=array(
	'Reservas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Reservas', 'url'=>array('index')),
	array('label'=>'Crear Reserva', 'url'=>array('create')),
	array('label'=>'Actualizar Reserva', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Reserva', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Reserva', 'url'=>array('admin')),
);
?>

<h1>Ver Reserva #<?php echo $model->id; ?></h1>
<br/>
<br/>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'huesped_id',
		'habitacion_id',
		'fecha_inicial',
		'confirmada',
		'fecha_final',
	),
)); ?>
