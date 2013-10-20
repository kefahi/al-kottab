<script>
var admin = '<li class="active"><a href="#home">الصفوف</a></li>'+
  '<li><a  href="#profile">العلامات</a></li>'+
  '<li><a class="tab-buttons" href="#messages">الحافلات</a></li>'+
  '<li><a href="#clubs">النوادي </a></li>'+
  '<li><a href="#settings">الأنشطة</a></li>'+
  '<li><a href="#teachers">المعلمين</a></li>  ';

var students ='<li class="active"><a href="#home">النظامين</a></li>'+
  '<li><a  href="#profile">سنوات سابقة</a></li>'+
  '<li><a class="tab-buttons" href="#messages">الوضع الأكاديمي</a></li>'+
  '<li><a href="#clubs">مجلس ضبط </a></li>'+
  '<li><a href="#clubs">نوادي </a></li>';

</script>
<!-- style=background:white; -->
<div class=' col-lg-12'>

<div class=' col-lg-12 ' >
<ul class="nav nav-tabs" id="myTab">
  <li class="active"><a href="#home">الصفوف</a></li>
  <li><a  href="#profile">العلامات</a></li>
  <li><a class='tab-buttons' href="#messages">الحافلات</a></li>
  <li><a href="#clubs">النوادي </a></li>
  <li><a href="#settings">الأنشطة</a></li>
  <li><a href="#teachers">المعلمين</a></li>  
</ul>

<div class="tab-content">
<div> 
</div>
<div class=' pull-left control-buttons' style=' left:-105px;position:relative; top: -16px;' > 

<p data-button="admin" > <img src='/mockups/images/orange-tab.png' />   <span > إداريات </span>   </p>
  <p data-button="teachers" > <img src='/mockups/images/blue-tab.png' />  <span > المدرسين </span>     </p>
  <p data-button="students" > <img src='/mockups/images/purple-tab.png' /> <span > الطلاب </span>      </p>
  <p data-button="parents" > <img src='/mockups/images/green-tab.png' /><span > أولياء الأمور </span> </p> 
  
</div>
  <div class="tab-pane active " id="home">
  <div class="col-md-9">
  <?php 
  $this->renderPartial('/classes/admin',array(
      'model'=>$classes,
    )); ?>
    </div>
  </div>
  <div class="tab-pane" id="profile">...profile</div>
    <div class="tab-pane" id="messages">.messages..</div>
  <div class="tab-pane " id="teachers">
    <div class="col-md-9">
    <?php 
     $this->renderPartial('/teacher/admin',array(
         'model'=>$teacher,
       )); 
      ?>
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
</script>