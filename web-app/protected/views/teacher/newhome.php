<!-- style=background:white; -->
<div class=' col-lg-12'>

  <div class=' col-lg-12 ' >
    <ul class="nav nav-tabs" id="myTab">
      <li class="active"><a href="#requisits">الإختبارات</a></li>
      <li class=""><a href="#teachers">العلامات</a></li>
      <li class=""><a href="#teachers">الواجبات</a></li>
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
  </div>
</div>
</div>
</div>

<script>
  $(function () {
    $('.control-buttons p').click(function(){
      switch($(this).attr('data-button') ){
        case "admin"    : $('#myTab').html( admin ); break;
        case "teachers" :  $('#myTab').html(  students);  break; 
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

<?php 
$cs = Yii::app()->clientScript ;
$cs->registerScriptFile('https://www.google.com/jsapi') ;