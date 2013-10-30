<div class="tab-content white" >
  <?php $this->renderPartial('/schools/view' , array('model'=>Schools::model()->findByPk(1) ) ) ; ?>
  <div class="col-md-12 white panel-group" id="accordion">
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
  
  
  <div class="container tab-pane" id="profile"><br/> <div >  <p> العلامات  </p> </div> </div>
  <div class="container tab-pane" id="classes"><br/>
  <?php $this->renderPartial('/classes/admin'  , array('model'=>new Classes('search'))) ; ?>
   <div >  <p> الصفوف  </p> </div> </div>
  <div class="tab-pane" id="rooms">
  <div class="nav-bar nav nav-default" style="height:45px;padding:5px;background:#CCCCCC"> 
  <ul class="nav nav-tabs" id="roomTab"> <li ><a href="#classes">الصفوف</a></li> </ul>
  إستعراض </div>
  <br/> <div class="container">  <p> الغرف </p> </div> </div>    
</div>

<script>
  $(function () {
    $('.control-buttons p').click(function(){
      switch($(this).attr('data-button') ){
        case "admin"    :  break; 
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


