<?php $this->beginContent('//layouts/main'); ?>
<div class="content">
    <div class="content_resize">
        <div class="mainbar">
			<?php echo $content; ?>
		</div><!-- content -->
		<div class="sidebar">
			<!--<div class="search">
              <form id="form" name="form" method="post" action="#">
                <span>
                <input name="q" type="text" class="keywords" id="textfield" maxlength="50" value="Buscar..." />
                <input name="b" type="image" src="<?php echo Yii::app()->baseUrl; ?>/images/search_btn.gif" class="button" />
                </span>
              </form>
            </div>-->
            <?php
                $this->beginWidget('zii.widgets.CPortlet', array(
                    'title'=>'Opciones',
                    'htmlOptions'=>array('class'=>'gadget'),
                ));
                $this->widget('zii.widgets.CMenu', array(
                    'items'=>$this->menu,
                    'htmlOptions'=>array('class'=>'gadget'),
                ));
                $this->endWidget();
            ?>                   
		</div><!-- sidebar -->
      <div class="clr"></div>
	</div>
</div>
<?php $this->endContent(); ?>
