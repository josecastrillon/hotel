<?php
/* @var $this RecepcionistaController */
/* @var $model Recepcionista */

$this->breadcrumbs=array(
	'Recepcionistas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Recepcionista', 'url'=>array('index')),
	array('label'=>'Create Recepcionista', 'url'=>array('create')),
	array('label'=>'Update Recepcionista', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Recepcionista', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Recepcionista', 'url'=>array('admin')),
);
?>

<h1>View Recepcionista #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'documento',
		'direccion',
		'telefono',
		'contrasenia',
	),
)); ?>
