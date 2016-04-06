<?php
/* @var $this ReservaController */
/* @var $model Reserva */

$this->breadcrumbs=array(
	'Reservas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Reserva', 'url'=>array('index')),
	array('label'=>'Administrar Reserva', 'url'=>array('admin')),
);
?>

<h1>Reserva</h1>
<br/>
<br/>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>