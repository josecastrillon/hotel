<?php
/* @var $this CocineroController */
/* @var $model Cocinero */

$this->breadcrumbs=array(
	'Cocineros'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cocinero', 'url'=>array('index')),
	array('label'=>'Create Cocinero', 'url'=>array('create')),
	array('label'=>'View Cocinero', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Cocinero', 'url'=>array('admin')),
);
?>

<h1>Update Cocinero <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>