<?php
/* @var $this HuespedController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Huespedes',
);

$this->menu=array(
	array('label'=>'Crear Huesped', 'url'=>array('create')),
	array('label'=>'Administrar Huespedes', 'url'=>array('admin')),
);
?>

<h1>Huespedes</h1>
<br/>
<br/>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
