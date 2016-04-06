<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<!-- <div id="mainmenu"> -->		
	<?php 
			/*
			+ Este es el menu que solo se le muestra a los usuarios logueados. 
			+
			*/
			if(!Yii::app()->getUser()->isGuest)
			{
				$this->widget('application.extensions.mbmenu.MbMenu',array( 
					'items'=>array( 
						array('label'=>'Gestion Usuarios', 'url'=>array('/usuario/create')), 
				
						array('label'=>'Gestion Permisos de Usuario', 'url'=>array('/srbac/authitem/frontpage'),'visible'=>Yii::app()->user->checkAccess("superUsuario")), 
				
						array('label'=>'Parametrizacion Basica', 'url'=>array('#'),
						  'items'=>array(                     
							array('label'=>'Gestion de Tipo Elemento', 'url'=>array('/tipoElemento/index')),
							array('label'=>'Gestion de Elementos', 'url'=>array('/elemento/index')),
							array('label'=>'Gestion de Marca', 'url'=>array('/marca/index')),
							array('label'=>'Gestion de Dependencias UAM', 'url'=>array('/dependenciaUAM/index')),
							array('label'=>'Gestion de Tipos de Mantenimiento', 'url'=>array('/tipoMantenimiento/index')),		
							array('label'=>'Gestion de Garantias', 'url'=>array('/garantia/index')),
							array('label'=>'Gestion de Centro de Costos', 'url'=>array('/centroCostos/index')),
							array('label'=>'Gestion de Propietarios', 'url'=>array('/propietario/index')),
							array('label'=>'Gestion de Proveedor', 'url'=>array('/proveedor/index')),			                    
						  ), 
						), 
						
						
						array('label'=>'Reserva','url'=>array('/reserva/index'),
						  'items'=>array( 
							array('label'=>'Consultar Reserva', 'url'=>array('/site/page','view'=>'sub1')),                     
						  ), 
						), 
						
						array('label'=>'Prestamo','url'=>array('/prestamoInicial/admin'),
						  'items'=>array( 
							array('label'=>'Cancelar Prestamo', 'url'=>array('/site/page','view'=>'sub1')), //aqui es para cancelar el prestamo                     
						  ), 
						), 
						
						array('label'=>'Sugerencia', 'url'=>array('/sugerencia/create'),
						  /*'items'=>array( 
							array('label'=>'Cancelar Prestamo', 'url'=>array('/site/page','view'=>'sub1')), //aqui es para cancelar el prestamo                     
						  ), */
						),
						array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Logout ('.Yii::app()->user->id.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),	
					), 
				)); 
			}
	?> 	
		



		<!-- </div><!-- mainmenu -->
	<?php //if(isset($this->breadcrumbs)):?>
		<?php /*$this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); */?><!-- breadcrumbs -->
	<?php //endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Jose Castrillon - Kevin Hincapie.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
