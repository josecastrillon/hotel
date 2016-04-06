<?php
/* @var $this CocineroController */
/* @var $model Cocinero */

$this->breadcrumbs=array(
	'Cocineros'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cocinero', 'url'=>array('index')),
	array('label'=>'Manage Cocinero', 'url'=>array('admin')),
);
?>

<h1>Create Cocinero</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>