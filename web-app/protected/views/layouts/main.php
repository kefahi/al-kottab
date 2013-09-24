<?php /* @var $this Controller */ ?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />



	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />


	


	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<style>  body {   padding-top: 40px;  } </style>
</head>

<body dir=rtl >

<div class="container" id="page">

<nav class="navbar navbar-default navbar-fixed-top ">
		<?php $this->widget('zii.widgets.CMenu',array(
			'htmlOptions'=>array('class'=>'nav navbar-nav'),

			'items'=>array(
				array('label'=>'الرئيسية', 'url'=>array('/site/index') ),
				array('label'=>'المدرسة', 'url'=>array('/schools') ),
				array('label'=>'الطلاب', 'url'=>array('/students' )),
				array('label'=>'الشعارات', 'url'=>array('/students' )),
				array('label'=>'الرسائل ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest) ,
				array('label'=>'خروج', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
			),
		)); ?>
	 </nav>
	<!-- mainmenu -->
	</div>
	<div class="clearfix visible-xs"></div>
	<div class="container bs-docs-container" >
			<?php  echo $content; ?>
		
	</div>

	
</div><!-- page -->
</body>
</html>
