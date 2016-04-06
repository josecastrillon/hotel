<?php
/* @var $this HabitacionController */
/* @var $model Habitacion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'habitacion-form',
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
					<?php echo $form->labelEx($model,'tipo_habitacion_id'); ?>
				</div>
			</td>		
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'tipo_habitacion_id',Utilidades::traer(TipoHabitacion::model(),'id','nombre', '...')); ?>					
					<?php echo $form->error($model,'tipo_habitacion_id'); ?>
				</div>
			</td>	
		</tr>
		<tr>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'numero'); ?>
				</div>
			</td>
			<td>
				<div class="row">	
					<?php echo $form->textField($model,'numero',array('size'=>30,'maxlength'=>10)); ?>
					<?php echo $form->error($model,'numero'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'locallizacion'); ?>
				</div>
			</td>		
			<td>
				<div class="row">
					<?php echo $form->textField($model,'locallizacion',array('size'=>30,'maxlength'=>30)); ?>
					<?php echo $form->error($model,'locallizacion'); ?>
				</div>
			</td>	
		
		</tr>
		<tr>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'precio_noche'); ?>
				</div>
			</td>
			<td>
				<div class="row">	
					<?php echo $form->textField($model,'precio_noche',array('size'=>30,'maxlength'=>10)); ?>
					<?php echo $form->error($model,'precio_noche'); ?>
				</div>
			</td>
		</tr>		
		<tr>
			<td colspan="2">
				<div class="row buttons">
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar'); ?>
				</div>
			</td>	
		</tr>
	</table>	

<?php $this->endWidget(); ?>

</div><!-- form -->