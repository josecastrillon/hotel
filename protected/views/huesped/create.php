<?php
/* @var $this HuespedController */
/* @var $model Huesped */

$this->breadcrumbs=array(
	'Huespeds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Huesped', 'url'=>array('index')),
	array('label'=>'Administrar Huesped', 'url'=>array('admin')),
);
?>

<h1>Crear Huesped</h1>
<br/>
<br/>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>