<?php /* @var $this Controller */ ?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <!-- <link rel="apple-touch-icon" href="//mindmup.s3.amazonaws.com/lib/img/apple-touch-icon.png" />
    <link rel="shortcut icon" href="http://mindmup.s3.amazonaws.com/lib/img/favicon.ico" > -->
    <!-- <link href="/js/google-code-prettify/prettify.css" rel="stylesheet"> -->
    <!-- <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css" rel="stylesheet"> -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="/js/jquery.hotkeys.js"></script> 
    <link href="/form.css" rel="stylesheet">
    
    <script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
    <script src="/js/google-code-prettify/prettify.js"></script>
    <!-- <link href="index.css" rel="stylesheet"> -->
    <script src="/js/bootstrap-wysiwyg.js"></script>
    <script src="/js/google-code-prettify/prettify.js"></script>
    <script src="/js/bootstrap-wysiwyg.js"></script>

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<style>  body {   padding-top: 80px;  } </style>
</head>

<body dir='rtl' >

<div class="container" id="page">

<nav class="navbar navbar-default navbar-fixed-top " >
		<?php $this->widget('zii.widgets.CMenu',array(
			'htmlOptions'=>array('class'=>'nav navbar-nav'),

			'items'=>array(
				array('label'=>'الرئيسية', 'url'=>array('/site/index') ),
				array('label'=>'المدرسة', 'url'=>array('/schools') ),
				array('label'=>'الطلاب', 'url'=>array('/student' )),
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
