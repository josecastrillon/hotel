<?php
/* @var $this TipoHabitacionController */
/* @var $model TipoHabitacion */

$this->breadcrumbs=array(
	'Tipo Habitacions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoHabitacion', 'url'=>array('index')),
	array('label'=>'Create TipoHabitacion', 'url'=>array('create')),
	array('label'=>'View TipoHabitacion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TipoHabitacion', 'url'=>array('admin')),
);
?>

<h1>Update TipoHabitacion <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>