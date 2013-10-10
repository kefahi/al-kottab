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
<div class=' pull-left control-buttons' style=' left:-105px;position:relative; top: -16px;' > <p>
  <img src='/mockups/images/orange-tab.png' />   <span > إداريات </span> </p> <p>
  <img src='/mockups/images/blue-tab.png' />  <span > المدرسين </span>  </p> <p>
  <img src='/mockups/images/purple-tab.png' /> <span > الطلاب </span>  </p> <p>
  <img src='/mockups/images/green-tab.png' /><span > أولياء الأمور </span>  </p> 

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
    $('.control-buttons').click(function(){
      alert('d');
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