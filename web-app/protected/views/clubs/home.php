<div   class='jumbotrosn'  >
	<div class="container">
    <?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
?>

<div class='col-md-8' >
  	
	<table class="table table-hover">
		<tr class="">
			<th>الليوم</th>
			<th>الحصة الأولى</th>
			<th>الحصة الثانية</th>
			<th>الحصة الثالثة</th>
			<th>الحصة الرابعة</th>
			<th>الحصة الخامسة</th>
			<th>الحصة السادسة</th>
			<th>الحصة السابعة</th>
			<!-- 
		  <td classs="">...</td>
		  <td classs="">...</td>
		  <td classs="">...</td>
		  <td classs="">...</td>
 -->
		</tr>
			<td  > الأحد </td>
			<td  > الخامس (ب) </td>
			<td  > السابع (ض) </td>
			<td  > السادس (ه) </td>
			<td  >   </td>
			<td  > الرابع (ب) </td>
			<td  class=disabled > d </td>
			<td  > الساعة (أ) </td>
		</tr>

		
		</tr>
			<td  > الإثنين </td>
			<td  > الخامس (ب) </td>
			<td  > السابع (ض) </td>
			<td  > السادس (ه) </td>
			<td  >   </td>
			<td  > الرابع (ب) </td>
			<td  class=disabled > d </td>
			<td  > الساعة (أ) </td>
		</tr>
		</tr>
			<td  > الثلاثاء </td>
			<td  > الخامس (ب) </td>
			<td  > السابع (ض) </td>
			<td  > السادس (ه) </td>
			<td  >   </td>
			<td  > الرابع (ب) </td>
			<td  class=disabled > d </td>
			<td  > الساعة (أ) </td>
		</tr>

		</tr>
			<td  > الأربعاء </td>
			<td  > الخامس (ب) </td>
			<td  > السابع (ض) </td>
			<td  > السادس (ه) </td>
			<td  >   </td>
			<td  > الرابع (ب) </td>
			<td  class=disabled > d </td>
			<td  > الساعة (أ) </td>
		</tr>

		</tr>
			<td  > الخميس </td>
			<td  > الخامس (ب) </td>
			<td  > السابع (ض) </td>
			<td  > السادس (ه) </td>
			<td  >   </td>
			<td  > الرابع (ب) </td>
			<td  class=disabled > d </td>
			<td  > الساعة (أ) </td>
		</tr>
	</table>
</div>
<!-- Split button -->		
<div class='col-md-4 ' >
	<ul class="nav nav-tabs" id="myTab">
	  <li  class="active" ><a href="#parent_noti">أولياء الأمور</a></li>
	  <li><a href="#partner_noti">الزملاء</a></li>
	  <li><a href="#student_noti">الطلاب</a></li>
	</ul>

	<div class="tab-content"  >
	  
	  <div class="tab-pane active"  id="parent_noti" >
		  
			<div class="panel panel-default  ">
				<!-- List group -->
				<ul class="list-group">
					<li class="list-group-item"><a class='button' href=# >  اريد تفسير عن مشكلة  اليوم  <a></li>
					<li class="list-group-item"><a class='button' href=# >  الرجو التركيز على المعادلات <a></li>
					<li class="list-group-item"><a class='button' href=# >  سيتغيب ابني غدا </a></li>
				</ul>
			</div>
	  </div>

	  <div class="tab-pane" id="partner_noti">

		<div class="panel panel-default  ">
			<!-- List group -->
			<ul class="list-group">
				<li class="list-group-item"><a class='button' href=# >  معرض العلوم <a></li>
				<li class="list-group-item"><a class='button' href=# >  متابعة مختبرات الحاسوب <a></li>
				<li class="list-group-item"><a class='button' href=# >  الحفل السنوي </a></li>
				<li class="list-group-item"><a class='button' href=# >  عرض شركة الكتاب !!! </a></li>
				
			</ul>
		</div>


	  </div>

	  <div class="tab-pane" id="student_noti">
	  	<div class="panel panel-default  ">
			<ul class="list-group">
				<li class="list-group-item"><a class='button' href=# >  اريد شرح اضافي للمادة </a></li>
				<li class="list-group-item"><a class='button' href=# >  ارج ان تعطينا اسئلة متوقعة </a></li>			
			</ul>
		</div>
</div>
  	
  </div>
</div>

<script>
  $('#myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
}) ;
</script>


<?php Yii::app()->clientScript->registerScriptFile('/bootstrap/js/jquery.js') ; ?>
<?php Yii::app()->clientScript->registerScriptFile('/bootstrap/js/bootstrap.js') ; ?>
<?php Yii::app()->clientScript->registerScriptFile('/bootstrap/js/dropdown.js') ; ?>
    
  </div>
</div>