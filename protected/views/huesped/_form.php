<?php
/* @var $this HuespedController */
/* @var $model Huesped */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'huesped-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<table>
		<tr>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'documento'); ?>
				</div>
			</td>		
			<td>
				<div class="row">
					<?php echo $form->textField($model,'documento',array('size'=>40)); ?>
					<?php echo $form->error($model,'documento'); ?>
				</div>
			</td>		
		</tr>
		<tr>	
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'nombre'); ?>
				</div>
			</td>
			<td>	
				<div class="row">
					<?php echo $form->textField($model,'nombre',array('size'=>40,'maxlength'=>40)); ?>
					<?php echo $form->error($model,'nombre'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'celular'); ?>
				</div>
			</td>		
			<td>
				<div class="row">
					<?php echo $form->textField($model,'celular',array('size'=>40,'maxlength'=>10)); ?>
					<?php echo $form->error($model,'celular'); ?>
				</div>
			</td>	
		</tr>
		<tr>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'telefono'); ?>
				</div>
			</td>	
			<td>
				<div class="row">
					<?php echo $form->textField($model,'telefono',array('size'=>40,'maxlength'=>10)); ?>
					<?php echo $form->error($model,'telefono'); ?>
				</div>
			</td>	
		</tr>
		<tr>	
			<td>
				<div class="row">		
					<?php echo $form->labelEx($model,'direccion'); ?>
				</div>
			</td>
			<td>
				<div class="row">			
					<?php echo $form->textField($model,'direccion',array('size'=>40,'maxlength'=>30)); ?>
					<?php echo $form->error($model,'direccion'); ?>
				</div>	
			</td>
			
		</tr>
		<tr>
			<td colspan="2">
				<div class="row buttons">
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Registra' : 'Actualizar'); ?>
				</div>
			</td>
		</tr>
	</table>

<?php $this->endWidget(); ?>

</div><!-- form -->