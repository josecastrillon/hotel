<?php
/* @var $this CuentaController */
/* @var $data Cuenta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('huesped_id')); ?>:</b>
	<?php echo CHtml::encode($data->huesped_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero_cuenta')); ?>:</b>
	<?php echo CHtml::encode($data->numero_cuenta); ?>
	<br />


</div>