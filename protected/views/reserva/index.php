<?php
/* @var $this ReservaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Reservas',
);

$this->menu=array(
	array('label'=>'Crear Reservas', 'url'=>array('create')),
	array('label'=>'Administrar Reservas', 'url'=>array('admin')),
);
?>

<h1>Reservas</h1>
<br/>
<br/>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
