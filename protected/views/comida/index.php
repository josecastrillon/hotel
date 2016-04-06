<?php
/* @var $this ComidaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Comidas',
);

$this->menu=array(
	array('label'=>'Create Comida', 'url'=>array('create')),
	array('label'=>'Manage Comida', 'url'=>array('admin')),
);
?>

<h1>Comidas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
