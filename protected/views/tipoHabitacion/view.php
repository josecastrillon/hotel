<?php
/* @var $this TipoHabitacionController */
/* @var $model TipoHabitacion */

$this->breadcrumbs=array(
	'Tipo Habitacions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TipoHabitacion', 'url'=>array('index')),
	array('label'=>'Create TipoHabitacion', 'url'=>array('create')),
	array('label'=>'Update TipoHabitacion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TipoHabitacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoHabitacion', 'url'=>array('admin')),
);
?>

<h1>View TipoHabitacion #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'descripcion',
	),
)); ?>
