<?php
/* @var $this HuespedController */
/* @var $model Huesped */

$this->breadcrumbs=array(
	'Huespeds'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Huespedes', 'url'=>array('index')),
	array('label'=>'Crear Huespedes', 'url'=>array('create')),
	array('label'=>'Ver Huesped', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Huespedes', 'url'=>array('admin')),
);
?>

<h1>Actualizar Huesped <?php echo $model->id; ?></h1>

<br/>
<br/>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>