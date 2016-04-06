<?php
/* @var $this RecepcionistaController */
/* @var $model Recepcionista */

$this->breadcrumbs=array(
	'Recepcionistas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Recepcionista', 'url'=>array('index')),
	array('label'=>'Manage Recepcionista', 'url'=>array('admin')),
);
?>

<h1>Create Recepcionista</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>