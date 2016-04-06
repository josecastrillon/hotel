<?php
/* @var $this CocineroController */
/* @var $model Cocinero */

$this->breadcrumbs=array(
	'Cocineros'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Cocinero', 'url'=>array('index')),
	array('label'=>'Create Cocinero', 'url'=>array('create')),
	array('label'=>'Update Cocinero', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Cocinero', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cocinero', 'url'=>array('admin')),
);
?>

<h1>View Cocinero #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'documento',
		'nombre',
		'telefono',
	),
)); ?>
