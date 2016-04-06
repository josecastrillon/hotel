<?php
/* @var $this ComidaController */
/* @var $data Comida */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('huesped_id')); ?>:</b>
	<?php echo CHtml::encode($data->huesped_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cocinero_id')); ?>:</b>
	<?php echo CHtml::encode($data->cocinero_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio')); ?>:</b>
	<?php echo CHtml::encode($data->precio); ?>
	<br />


</div>