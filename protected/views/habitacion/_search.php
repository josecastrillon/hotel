<?php
/* @var $this HabitacionController */
/* @var $model Habitacion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>30,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_habitacion_id'); ?>
		<?php echo $form->textField($model,'tipo_habitacion_id',array('size'=>30,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numero'); ?>
		<?php echo $form->textField($model,'numero',array('size'=>30,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'locallizacion'); ?>
		<?php echo $form->textField($model,'locallizacion',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precio_noche'); ?>
		<?php echo $form->textField($model,'precio_noche',array('size'=>30,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->