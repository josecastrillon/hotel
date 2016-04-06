<?php
/* @var $this HabitacionController */
/* @var $data Habitacion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_habitacion_id')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_habitacion_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero')); ?>:</b>
	<?php echo CHtml::encode($data->numero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('locallizacion')); ?>:</b>
	<?php echo CHtml::encode($data->locallizacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio_noche')); ?>:</b>
	<?php echo CHtml::encode($data->precio_noche); ?>
	<br />


</div>