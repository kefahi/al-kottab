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
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav">
  <!--       <li class="active"><?php echo CHtml::link('الإدارة', '/site/index' ) ; ?></li>
        <li ><?php echo CHtml::link('الرسائل', '/messages' ) ; ?></li>
        <li ><?php echo CHtml::link('المعلم', '/teacher/home' ) ; ?></li> -->
        <!-- <li class="dropdown"> 
          <?php echo CHtml::link('الطلاب<b class="caret"></b>', '/schools/'  , array('class'=>"dropdown-toggle" ,  'data-toggle'=>"dropdown")) ; ?>
          <ul class="dropdown-menu">
              <li ><?php echo CHtml::link('استعراض', '/student/admin' ) ; ?></li>
              <li ><?php echo CHtml::link('ادخال', '/student/create' ) ; ?></li>
          </ul> 
        </li> -->

        <!-- <li ><?php echo CHtml::link('الصف', '/classes/home' ) ; ?></li> -->
        
        <li class="dropdown"> 
          <?php echo CHtml::link('المدارس<b class="caret"></b>', '/schools/'  , array('class'=>"dropdown-toggle" ,  'data-toggle'=>"dropdown")) ; ?>
          <ul class="dropdown-menu">
              <li ><?php echo CHtml::link('استعراض', '/schools' ) ; ?></li>
              <li ><?php echo CHtml::link('ادخال', '/schools/create' ) ; ?></li>
          </ul> 
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">إدارة <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">المالية</a></li>
            <li><a href="#">المعلمين</a></li>
            <li><a href="#">الطلاب</a></li>
          </ul>
        </li>
        <li>
  	      <a href="#">الإشعارات <span class="badge"></span></a>
        </li>
        <li><a href="#">الرسائل <span class="badge"></span></a></li>

        
      </ul>    

      <ul class="nav navbar-nav navbar-left">
        
        <?php 
        if(Yii::app()->user->isGuest) 
          echo '<li><a href="/site/login">تسجيل الدخول</a></li>' ;
        else echo '<li><a href="#">الملف الشخصي</a></li><li><a href="/site/logout">خروج</a></li>' ;
        ?>
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
    
  	<div class="container bs-docs-container"  style="">
  			<?php  echo $content; ?>		
  	</div>  

  <div class=clear  style="height:100px"></div>
  <div class="container  navbar navbar-default navbar-bottom   navbar-default navbar-fixed-bottom   footer" style="background:whtie; " id='footer'>
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
   