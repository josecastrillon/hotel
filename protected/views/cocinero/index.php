<?php
/* @var $this CocineroController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cocineros',
);

$this->menu=array(
	array('label'=>'Create Cocinero', 'url'=>array('create')),
	array('label'=>'Manage Cocinero', 'url'=>array('admin')),
);
?>

<h1>Cocineros</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
