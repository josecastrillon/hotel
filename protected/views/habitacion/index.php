<?php
/* @var $this HabitacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Habitacions',
);

$this->menu=array(
	array('label'=>'Crear Habitación', 'url'=>array('create')),
	array('label'=>'Administrar Habitación', 'url'=>array('admin')),
);
?>

<h1>Habitaciones</h1>
<br/>
<br/>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
