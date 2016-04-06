<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	
	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/winglobal/style.css" />
	
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/winglobal/js/cufon-yui.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/winglobal/js/arial.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/winglobal/js/cuf_run.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
</head>

<body>
<div class="main" >
	<div class="header">
        <div class="header_resize" >
            <div class="menu_nav">
                <?php 
				
					if(!Yii::app()->getUser()->isGuest)
					{
						$this->widget('zii.widgets.CMenu',array(
						'items'=>array(
							array('label'=>'Huespedes', 'url'=>array('huesped/index'),
							
								'submenuOptions'=>array('class'=>'nav-sub'),'items'=>array(
									array('label'=>'Registrar huésped', 'url'=>array('huesped/create')),									
									array('label'=>'Administrar huésped', 'url'=>array('huesped/admin')),
									
								)
							
							),
							array('label'=>'Reservas', 'url'=>array('reserva/index'),
								'submenuOptions'=>array('class'=>'nav-sub'),'items'=>array(
									array('label'=>'Registrar reserva', 'url'=>array('reserva/create')),									
									array('label'=>'Administrar reserva', 'url'=>array('reserva/admin')),
								)	
							),
							
							
							array('label'=>'Habitaciones', 'url'=>array('/habitacion/index'),
								'submenuOptions'=>array('class'=>'nav-sub'),'items'=>array(
									array('label'=>'Registrar habitación', 'url'=>array('habitacion/create')),									
									array('label'=>'Administrar habitación', 'url'=>array('habitacion/admin')),
								)	
							),
							array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
							array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
						),
						
							'htmlOptions'=>array('class'=>'menu_nav'),
						));
					}	
				?>
            </div>    
    		<div class="logo">
                <h1><?php echo CHtml::encode(Yii::app()->name); ?></h1>
            </div>       
            <div class="clr"></div>
        </div>            
	</div><!-- header -->
    <div class="clr"></div>    
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>
    <div class="fbg">
        <div class="fbg_resize">           
            <div class="col c2">
                <h2><span>EL PRIVILEGIO DE ELEGIR</span></h2>                   
                    
					<p>Los privilegios continúan cuando usted puede escoger lo que más le agrada. El Hotel El Motosito le ofrece la posibilidad de elegir entre 8 suites y 33 habitaciones perfectamente equipadas con todas las comodidades, alta calidad y con diferentes opciones de acomodación según sean sus necesidades.<p>
            </div>
            <div class="col c3">
                <h2><span>Contacto</span></h2>
                    <p>HOTEL EL MOTOSITO - BOGOTA DC - COLOMBIA</p>
                    <p><a href="#">info@hotelelmotosito.com</a></p>
                    <p>+57 1 255 361<br />
                    +57 1 255 3872</p>
                    <p>Dirección: Calle 63 # 15-61  Bogotá DC - Colombia </p>
            </div>
            <div class="clr"></div>
        </div>
    </div>
	
        <div class="footer">
            <div class="footer_resize" >
                <p class="lf" >Copyright &copy; <?php echo date('Y'); ?> por Jose Castrillon - Kevin Hincapie..</p>
                <p class="rf" >All Rights Reserved.<?php echo Yii::powered(); ?></p>
                <div class="clr"></div>
            </div>
        </div><!-- footer -->

</div><!-- page -->

</body>
</html>
