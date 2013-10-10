<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="row ">
	

	<div class=" col-lg-2" style="">
<?php     if(!Yii::app()->user->isGuest) : ?>
<ul class=" affix"  >
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
    </li>  
      <li class="list-group-item"><a href="#"> تسجيل الخروج  </a> </li>
      <li class="list-group-item">
      <a href="<?php echo $this->createUrl('/schools/view'). "?id=". Users::model()->findByPk(Yii::app()->user->id)->school_id ?>"> 
        <?php 
          $user = Users::model()->findByPk(Yii::app()->user->id) ;
          if(isset($user->school->name))
          echo $user->school->name ;
        ?> 
      </a>
  </li>

  </ul>
<?php endif?>
	</div>

  <div class="col-lg-10">
    <?php  echo $content; ?>
  </div>

</div>

<?php $this->endContent(); ?>
