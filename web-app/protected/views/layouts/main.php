<?php /* @var $this Controller */ ?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    
 	<?php Yii::app()->clientScript->registerScriptFile('/bootstrap/js/jquery.js') ; ?>
 	<?php Yii::app()->clientScript->registerScriptFile('/bootstrap/js/bootstrap.js') ; ?>
 	<script src="/bootstrap/js/jquery.js" ></script>
 	<script src="/bootstrap/js/bootstrap.js" ></script>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<style>  body {   padding-top: 80px;  } </style>
</head>

<body dir='rtl' >

<div class="container" id="page">


<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#"> <?php echo Yii::app()->name ?> </a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><?php echo CHtml::link('الإدارة', '/site/index' ) ; ?></li>
      <li ><?php echo CHtml::link('الرسائل', '/site/index' ) ; ?></li>
      <li ><?php echo CHtml::link('المعلم', '/teacher/home' ) ; ?></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">إدارة <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">المالية</a></li>
          <li><a href="#">المعلمين</a></li>
          <li><a href="#">الطلاب</a></li>
        </ul>
      </li>
    </ul>    

    <ul class="nav navbar-nav navbar-left">
      <li><a href="#">الملف الشخصي</a></li>
      <li><a href="#">خروج</a></li>

    </ul>
  </div><!-- /.navbar-collapse -->
</nav>
<?php
 // <nav class="navbar navbar-default navbar-fixed-top " >
 //    <a class="navbar-brand" href="#"> <?php echo Yii::app()->name ; 
 //? >
  //</a>
	// 	<?php $this->widget('zii.widgets.CMenu',array(
	// 		'htmlOptions'=>array('class'=>'nav navbar-nav'),

	// 		'items'=>array(
	// 			array('label'=>'الرئيسية', 'url'=>array('/site/index') ),
	// 			array('label'=>'المدرسة', 'url'=>array('/schools') ),
	// 			array('label'=>'المدرسة', 'url'=>array('/schools') ),
	// 			array('label'=>'الطلاب', 'url'=>array('/student' )),
	// 			array('label'=>'الشعارات', 'url'=>array('/students' )),
	// 			array('label'=>'الرسائل ',
	// 				'url'=>array('/messages" class="dropdown-toggle dropdown') ,
	// 				'submenuOptions'=>array(
	// 			 	'class'=>'dropdown-menu', 
	// 			 ),
	// 			 'items'=>array(
	// 			 	array('label'=>'SubItem1', 'url'=>array('site/anot','id'=>'12')),
	// 				array('label'=>'SubItem2', 'url'=>array('site/anot','id'=>'13')),
	// 				)
	// 			) ,
	// 			array('label'=>'خروج', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
	// 		),
	// 	));

	// </nav> 
   ?>
	<!-- mainmenu -->
	</div>
	<div class="clearfix visible-xs"></div>
	<div class="container bs-docs-container" >
			<?php  echo $content; ?>		
	</div>
	
</div><!-- page -->
</body>
</html>
