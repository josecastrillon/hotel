<?php
/* @var $this HabitacionController */
/* @var $model Habitacion */

$this->breadcrumbs=array(
	'Habitacions'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Habitacion', 'url'=>array('index')),
	array('label'=>'Crear Habitacion', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#habitacion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Habitaciones</h1>

<p>
Puede introducir opcionalmente un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al inicio de cada uno de los valores de búsqueda para especificar la forma en la comparación debe hacerse..
</p>

<?php echo CHtml::link('B&uacute;squedad avanzada ','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'habitacion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'tipo_habitacion_id',
		'numero',
		'locallizacion',
		'precio_noche',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
