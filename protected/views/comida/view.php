<?php
/* @var $this ComidaController */
/* @var $model Comida */

$this->breadcrumbs=array(
	'Comidas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Comida', 'url'=>array('index')),
	array('label'=>'Create Comida', 'url'=>array('create')),
	array('label'=>'Update Comida', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Comida', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Comida', 'url'=>array('admin')),
);
?>

<h1>View Comida #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'huesped_id',
		'cocinero_id',
		'nombre',
		'precio',
	),
)); ?>
