<?php
/* @var $this ComidaController */
/* @var $model Comida */

$this->breadcrumbs=array(
	'Comidas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Comida', 'url'=>array('index')),
	array('label'=>'Manage Comida', 'url'=>array('admin')),
);
?>

<h1>Create Comida</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>