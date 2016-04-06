<?php
/* @var $this ReservaController */
/* @var $data Reserva */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('huesped_id')); ?>:</b>
	<?php echo CHtml::encode($data->huesped_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('habitacion_id')); ?>:</b>
	<?php echo CHtml::encode($data->habitacion_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_inicial')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_inicial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('confirmada')); ?>:</b>
	<?php echo CHtml::encode($data->confirmada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_final')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_final); ?>
	<br />


</div>