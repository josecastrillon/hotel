<?php
	$this->pageTitle=Yii::app()->name . '..::Hotel Reservas::..';
	/*$this->breadcrumbs=array(
		'Login',
	);*/
?>

<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'login-form',
			'action'=> CHtml::normalizeUrl(array('site/login')),   //a todos los formularios. 
			'enableClientValidation'=>true,
			'enableAjaxValidation'=>true,
)); ?>

<section class="container">
    <div class="login">
      <h1>Ingreso a hotel motosito</h1>
	  
		
		<div class="row">			
			<p><?php echo $form->textField($model,'username',array('placeholder'=>"documento")); ?></p>
			<?php echo $form->error($model,'username'); ?>
		</div>
		
		<div class="row">				
			<p><?php echo $form->passwordField($model,'password',array('placeholder'=>"Contraseña")); ?></p>
			<?php echo $form->error($model,'password'); ?>
		</div>
		
		<div class="row buttons">
			<?php echo CHtml::submitButton('Ingresar'); ?>			
		</div>

		<?php $this->endWidget(); ?>	
    </div>
    
 </section>



  
