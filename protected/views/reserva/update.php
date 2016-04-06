<?php
/* @var $this ReservaController */
/* @var $model Reserva */

$this->breadcrumbs=array(
	'Reservas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Reservas', 'url'=>array('index')),
	array('label'=>'Crear Reservas', 'url'=>array('create')),
	array('label'=>'Ver Reserva', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Reserva', 'url'=>array('admin')),
);
?>

<h1>Actualizar Reserva <?php echo $model->id; ?></h1>
<br/>
<br/>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>