<?php
/* @var $this TipoHabitacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Habitacions',
);

$this->menu=array(
	array('label'=>'Create TipoHabitacion', 'url'=>array('create')),
	array('label'=>'Manage TipoHabitacion', 'url'=>array('admin')),
);
?>

<h1>Tipo Habitacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
