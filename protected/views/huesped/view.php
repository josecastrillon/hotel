<?php
/* @var $this HuespedController */
/* @var $model Huesped */

$this->breadcrumbs=array(
	'Huespeds'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Huesped', 'url'=>array('index')),
	array('label'=>'Crear Huesped', 'url'=>array('create')),
	array('label'=>'Actualizar Huesped', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Huesped', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Huesped', 'url'=>array('admin')),
);
?>

<h1>Ver Huesped #<?php echo $model->id; ?></h1>

<br/>
<br/>


<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'documento',
		'nombre',
		'celular',
		'telefono',
		'direccion',
	),
)); ?>
