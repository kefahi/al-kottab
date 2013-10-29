<!DOCTYPE html>
<html  lang="ar">
  <head>

  <link rel="stylesheet" type="text/css" href="/calendar/calendar.css" />
  <link rel="stylesheet" type="text/css" href="/custome.css" />
  <script type="text/javascript" src="/calendar/yahoo-dom-event.js"></script>
  <script type="text/javascript" src="/calendar/calendar-min.js" ></script>



  <style type="text/css">
    #cal1Container {
       margin:1em;
    }

    #caleventlog {
      float:left;
      width:35em;
      margin:1em;
      background-color:#eee;
      border:1px solid #000;
    }
    #caleventlog .bd {
      overflow:auto;
      height:20em;
      padding:5px;
    }
    #caleventlog .hd {
      background-color:#aaa;
      border-bottom:1px solid #000;
      font-weight:bold;
      padding:2px;
    }
    #caleventlog .entry {
      margin:0; 
    }
  </style>



  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  	<meta name="language" content="en" />

    
   	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/css/bootstrap.css" />
  	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
  	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
  	<style>  body {   padding-top: 80px; background-color: #DDDEE0; /*  background-color: #E6E6E6; */} 

    .navbar-default{ /*  background-color: white; */}</style>
  </head>

  <body dir='rtl' >


    <nav class="navbar navbar-default navbar-fixed-top " >
       <a class="navbar-brand" href="#"> <?php echo Yii::app()->name ;    ?> </a>
      
    </nav> 


  <div class="container" id="page" style="">


  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"><b> <?php echo Yii::app()->name ?> </b></a>
      <?php $this->widget('zii.widgets.CMenu',array(
       'htmlOptions'=>array('class'=>'nav navbar-nav'),
       'items'=>array(
         array('label'=>'الرئيسية', 'url'=>array('/site/index') ),
         array('label'=>'المدرسة', 'url'=>array('/schools/admin') ),
         array('label'=>'الطلاب', 'url'=>array('/student/admin' )),
         array('label'=>'الشعارات', 'url'=>array('/students/admin' )),
         array('label'=>'الرسائل ', 'url'=>array('/messages/admin')) ,
         array('label'=>'خروج', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
       ),
     ));
     ?>
    </div>
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
    
  	<div class="container bs-docs-container"  style="">
  			<?php  echo $content; ?>		
  	</div>  

  <div class=clear  style="height:100px"></div>
  <!-- <div class="container  navbar navbar-default navbar-bottom   navbar-default navbar-fixed-bottom   footer" style="background:whtie; " id='footer'>
  <br/>
      <center>  ©2013 جميع الحقوق محفوظة، الكتاب اسم مسجل لشركة الكتاب  </center>

  </div><!-- content -->
 
  </body>
  </html>

  <?php
    $cs = Yii::app()->clientScript ;
    $cs->registerCoreScript('jquery.ui');
    $cs->registerCssFile($cs->getCoreScriptUrl(). '/jui/css/base/jquery-ui.css'); 

    $cs->registerCoreScript('jsdfquery-usddfi');
    $cs->registerScriptFile('/bootstrap/js/bootstrap.js') ;
    $cs->registerScriptFile('/bootstrap-pl/bootstrap-select.js') ;
    $cs->registerCssFile('/bootstrap-pl/bootstrap-select.css') ;
    $cs->registerCssFile('/mockups/less/al-kottab.css') ;
    $cs->registerScript('input-to-bootstrap', "$('input').addClass('form-control');");
    $cs->registerScript('textarea-to-bootstrap', "$('textarea').addClass('form-control');");
    $cs->registerScript('bootstrap-label-design', "$('.form-group > label').addClass('control-label');");
    $cs->registerScript('bootstrap-input-design', "$('.form-group > input').addClass('form-control');");
    //$cs->registerScript('bootstrap-input-design', "$(function() { $( '.date' ).datepicker();  } );$('.selectpicker').selectpicker();");