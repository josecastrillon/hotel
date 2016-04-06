<?php
/* @var $this ReservaController */
/* @var $model Reserva */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'reserva-form',
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
					<?php echo $form->labelEx($model,'huesped_id'); ?>
				</div>
			</td>	
			<td>
				<div class="row">					
					
					<?php echo $form->dropDownList($model,'huesped_id',Utilidades::traer(Huesped::model(),'id','nombre', '...')); ?>					
					<?php echo $form->error($model,'huesped_id'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'habitacion_id'); ?>
				</div>
			</td>
			<td>
				<div class="row">	
					<?php echo $form->dropDownList($model,'habitacion_id',Utilidades::traer(Habitacion::model(),'id','numero', '...')); ?>										
					<?php echo $form->error($model,'habitacion_id'); ?>
				</div>
			</td>	
		</tr>
		<tr>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'fecha_inicial'); ?>
				</div>
			</td>
			<td>
				<div class="row">	
					<?php 
						$this->widget('application.extensions.cjuiDateTimePicker.CJuiDateTimePicker',array(
						'model'=>$model,
						'attribute'=>'fecha_inicial',
						'mode'=>'date',
						'options'=>array(							
							'defaultDate'=>date("Y-m-d"),																											
							'dateFormat'=>'yy-mm-dd',							
							//'ampm'=>true,
							'changeMonth' => true,
							'changeYear' => true,
							'minDate'=>'js:new Date(' . date('Y,m-1,d') . ')',
							),
						'htmlOptions'=>array('readonly'=>true), 
						));
						
					 ?>
					
					<?php echo $form->error($model,'fecha_inicial'); ?>
				</div>
			</td>	
		</tr>
		<tr>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'fecha_final'); ?>
				</div>
			</td>
			<td>
				<div class="row">			
					<?php $this->widget('application.extensions.cjuiDateTimePicker.CJuiDateTimePicker',array(
						'model'=>$model,
						'attribute'=>'fecha_final',
						'mode'=>'date',
						'options'=>array(							
							'defaultDate'=>date("Y-m-d"),																											
							'dateFormat'=>'yy-mm-dd',							
							//'ampm'=>true,
							'changeMonth' => true,
							'changeYear' => true,
							'minDate'=>'js:new Date(' . date('Y,m-1,d') . ')',
							),
						'htmlOptions'=>array('readonly'=>true), 
						));?>	
					
					<?php echo $form->error($model,'fecha_final'); ?>
				</div>
			</td>			
		</tr>	
		<tr>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'confirmada'); ?>
				</div>
			</td>
			<td>
				<div class="row">	
					<?php echo $form->dropDownList($model,'confirmada',array( '1'=>'Si','2'=>'No')); ?>					
					<?php echo $form->error($model,'confirmada'); ?>
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
