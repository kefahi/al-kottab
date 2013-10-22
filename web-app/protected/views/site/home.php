<script>
var admin = '<li class="active"><a href="#home">الرئيسية</a></li>'+
'<li ><a href="#classes">الصفوف</a></li>'+
'<li ><a href="#rooms">الغرف</a></li>'+
  // '<li><a  href="#grads">العلامات</a></li>'+
  '<li><a href="#teachers">المعلمين</a></li>  '  ;
  // '<li><a class="tab-buttons" href="#messages">الحافلات</a></li>'+
  // '<li><a href="#clubs">النوادي </a></li>'+
  // '<li><a href="#settings">الأنشطة</a></li>';

var students = 
  '<li class="active"><a href="#requisits">الإختبارات</a></li>'+
  '<li class=""><a href="#teachers">العلامات</a></li>'+
  '<li class=""><a href="#teachers">الواجبات</a></li> ';
  
</script>
<!-- style=background:white; -->
<div class=' col-lg-12'>

<div class=' col-lg-12 ' >
<ul class="nav nav-tabs" id="myTab">
  <li class="active"><a href="#home">الرئيسية</a></li>
  <li ><a href="#classes">الصفوف</a></li>
  <li ><a href="#rooms">الغرف</a></li>
  <li><a href="#teachers">المعلمين</a></li>
  <!-- <li><a  href="#profile">العلامات</a></li> -->
  <!-- <li><a class='tab-buttons' href="#messages">الحافلات</a></li>
  <li><a href="#clubs">النوادي </a></li>
  <li><a href="#settings">الأنشطة</a></li>
     -->
</ul>

<div class="tab-content">
<div class=' pull-left control-buttons' style=' left:-115px;position:relative; top: -16px;' > 

<p data-button="admin" > <img src='/mockups/images/orange-tab.png' />   <span > إداريات </span>   </p>
  <p data-button="teachers" > <img src='/mockups/images/blue-tab.png' />  <span > المدرسين </span>     </p>
  <p data-button="students" > <img src='/mockups/images/purple-tab.png' /> <span > الطلاب </span>      </p>
  <p data-button="parents" > <img src='/mockups/images/green-tab.png' /><span > أولياء الأمور </span> </p> 
  
</div>
  <div class="tab-pane active " id="home" style ="height:1000px">
  <?php $this->renderPartial('/schools/view' , array('model'=>Schools::model()->findByPk(1) ) ) ; ?>
  <div class="col-md-9">
  <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#taskPanel">
          المهام
        </a>
      </h4>
    </div>
    <div id="taskPanel" class="panel-collapse collapse">
      <div class="panel-body">
        <div id="cal1Container"></div>
        <div id="caleventlog" class="eventlog">
            <div id="evtentries" class="bd"></div>
        </div>
        <div style="clear:both"></div>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#student">
          الطلاب
        </a>
      </h4>
    </div>

    <div id="student" class="panel-collapse collapse ">
      <div class="panel-body">
        <div id="student_chart_div" style="width: 900px; height: 500px;"></div>
      </div>
    </div>
  </div>
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#stuff">
          الكادر
        </a>
      </h4>
    </div>
    <div id="stuff" class="panel-collapse collapse">
      <div class="panel-body">
        <div id="stuff_chart_div" style="width: 900px; height: 500px;"></div>
      </div>
    </div>
  </div>


  </div>
  <?php 

  // $this->renderPartial('/classes/admin',array(
  //     'model'=>$classes,
  //  )); ?>
    </div>
  </div>
  <div class="container tab-pane" id="profile"><br/> <div >  <p> العلامات  </p> </div> </div>
  <div class="container tab-pane" id="classes"><br/>
  <?php $this->renderPartial('/classes/admin'  , array('model'=>new Classes('search'))) ; ?>
   <div >  <p> الصفوف  </p> </div> </div>
  <div class="tab-pane" id="rooms">
  <div class="nav-bar nav nav-default" style="height:45px;padding:5px;background:#CCCCCC"> 
  <ul class="nav nav-tabs" id="roomTab"> <li ><a href="#classes">الصفوف</a></li> </ul>
  إستعراض </div>
  <br/> <div class="container">  <p> الغرف </p> </div> </div>
    <div class="container tab-pane" id="messages"><br/> <div >  <p> الحافلات </p> </div> </div>
  <div class="tab-pane " id="teachers">
    <div class="col-md-9">
    <?php 
     $this->renderPartial('/teacher/admin',array(
         'model'=>$teacher,
       )); 
      ?>
      </div>
  </div>
  <div class="container tab-pane " id="addTeacher">
    <div class="col-md-9">
      <?php   echo $this->renderPartial('/teacher/_form' ,array( 'model'=>Teacher::model() ));  ?> 
    </div>
  </div>
</div>
</div>

<script>
  $(function () {
    $('.control-buttons p').click(function(){
      switch($(this).attr('data-button') ){
        case "admin"    : $('#myTab').html( admin ); break;
        case "teachers" :  window.location="/teacher/newhome";  break; 
        case "students" : alert("students");  break;
        case "parents"  :; alert("parents") ;  break;
      }
      $('#myTab a').click(function(e) { 
      $(this).tab('show') ;  } ) ;
    }) ;
    $('#myTab a').click(function(e) { 
    $(this).tab('show') ;  } ) ;
  }) ;

</script>

</div>

<script>
  $('.glyphicon-new-window').click(function(id){ location.href = "/classes/view/"+$(this).attr('data-original-id');} ) ;
  $('#classes-grid table').addClass('table table-hover' );
  $('div > .pager').removeClass('pager ');
      google.load('visualization', '1', {packages:['corechart']});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var student_data = google.visualization.arrayToDataTable([
          ['الليوم', 'بإذن', 'من دون إذن'],
          ['Sunday',  1,      4],
          ['Monday',  1,      4],
          ['Tuesday',  0,       0],
          ['Wednesday',  0,      0],
          ['Thursday',  0,      0]

        ]);

        var stuff_data = google.visualization.arrayToDataTable([
          ['الليوم', 'بإذن', 'من دون إذن'],
          ['Sunday',  0,      0],
          ['Monday',  0,      1],
          ['Tuesday',  0,       0],
          ['Wednesday',  0,      0],
          ['Thursday',  0,      0]

        ]);

        var student_options = {
          title: 'غياب الطلاب',
          hAxis: {title: 'الليوم', titleTextStyle: {color: 'red'}}
        };

        var stuff_options = {
          title: 'غياب الكادر',
          hAxis: {title: 'الليوم', titleTextStyle: {color: 'red'}}
        };

        var student_chart = new google.visualization.ColumnChart(document.getElementById('student_chart_div'));
        var stuff_chart = new google.visualization.ColumnChart(document.getElementById('stuff_chart_div'));
        

        student_chart.draw(student_data, student_options);
        stuff_chart.draw(stuff_data, stuff_options);
      }  
</script>

<script type="text/javascript">
  YAHOO.namespace("example.calendar");

  YAHOO.example.calendar.init = function() {
    var eLog = YAHOO.util.Dom.get("evtentries");
    var eCount = 1;

    function logEvent(msg) {
      eLog.innerHTML = '<pre class="entry"> ' + msg + '</pre>' ;
      eCount++;
    }

    function dateToLocaleString(dt, cal) {
                  var wStr = cal.cfg.getProperty("WEEKDAYS_LONG")[dt.getDay()];
                  var dStr = dt.getDate();
                  var mStr = cal.cfg.getProperty("MONTHS_LONG")[dt.getMonth()];
                  var yStr = dt.getFullYear();
                  return (wStr + ", " + dStr + " " + mStr + " " + yStr);
    }

    function mySelectHandler(type,args,obj) {
      var selected = args[0];
      var selDate = this.toDate(selected[0]);
       
      logEvent("لا يوجد مهام لتاريخ : " + dateToLocaleString(selDate, this));
    };

    // function myDeselectHandler(type, args, obj) {
    //   var deselected = args[0];
    //   var deselDate = this.toDate(deselected[0]);

    //   logEvent("DESELECTED: " + dateToLocaleString(deselDate, this));
    // };

    YAHOO.example.calendar.cal1 = new YAHOO.widget.Calendar("cal1","cal1Container");

    YAHOO.example.calendar.cal1.selectEvent.subscribe(mySelectHandler, YAHOO.example.calendar.cal1, true);
    //YAHOO.example.calendar.cal1.deselectEvent.subscribe(myDeselectHandler, YAHOO.example.calendar.cal1, true);

    YAHOO.example.calendar.cal1.render();
  }

  YAHOO.util.Event.onDOMReady(YAHOO.example.calendar.init);
</script>


<?php 
$cs = Yii::app()->clientScript ;
$cs->registerScriptFile('https://www.google.com/jsapi') ;

// $cs->registerScript('input-to-bootstrap', " 
//       " );