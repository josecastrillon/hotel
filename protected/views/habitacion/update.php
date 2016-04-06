<?php
/* @var $this HabitacionController */
/* @var $model Habitacion */

$this->breadcrumbs=array(
	'Habitacions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Habitación', 'url'=>array('index')),
	array('label'=>'Crear Habitación', 'url'=>array('create')),
	array('label'=>'Ver Habitaciones', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Habitación', 'url'=>array('admin')),
);
?>

<h1>Actualizar Habitación <?php echo $model->id; ?></h1>
<br/>
<br/>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>