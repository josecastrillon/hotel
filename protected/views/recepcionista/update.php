<?php
/* @var $this RecepcionistaController */
/* @var $model Recepcionista */

$this->breadcrumbs=array(
	'Recepcionistas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Recepcionista', 'url'=>array('index')),
	array('label'=>'Create Recepcionista', 'url'=>array('create')),
	array('label'=>'View Recepcionista', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Recepcionista', 'url'=>array('admin')),
);
?>

<h1>Update Recepcionista <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>