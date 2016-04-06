<?php
/* @var $this ComidaController */
/* @var $model Comida */

$this->breadcrumbs=array(
	'Comidas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Comida', 'url'=>array('index')),
	array('label'=>'Create Comida', 'url'=>array('create')),
	array('label'=>'View Comida', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Comida', 'url'=>array('admin')),
);
?>

<h1>Update Comida <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>