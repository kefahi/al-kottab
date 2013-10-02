<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="row ">
	<div class="col-md-10">
		<?php  echo $content; ?>
	</div>

	<div class="affix  left pull-left col-md-2" style="float:left;">
<ul class=" list-group"  >
  <li class="list-group-item" >
    <a href="#">
      <span class="badge pull-left	">42</span>
      الرسائل
    </a>
    </li>  
    <li class="list-group-item" >
    <a href="#">
      <span class="badge pull-left	">42</span>
      الإشعارات
    </a>
    </li>  <li class="list-group-item">
    <a href="#">
      
      تسجيل الخروج
    </a>
  </li>

</ul>


	</div>
</div>
<?php $this->endContent(); ?>
