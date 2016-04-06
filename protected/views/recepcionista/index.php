<?php
/* @var $this RecepcionistaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Recepcionistas',
);

$this->menu=array(
	array('label'=>'Create Recepcionista', 'url'=>array('create')),
	array('label'=>'Manage Recepcionista', 'url'=>array('admin')),
);
?>

<h1>Recepcionistas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
