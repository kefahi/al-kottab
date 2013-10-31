
  <div class="container " >
  
  
  <?php if(Yii::app()->user->isGuest) :
   $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'htmlOptions' => array('role'=>"form"  ,  'class' =>'login  col-lg-3' , 'action'=>'/site/login'),
	'enableClientValidation'=>true,
	'action'=>'/site/login',
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

  	
  	<br/>


	<div class=" form-group">
		<?php echo $form->labelEx($model,'username' , array('class'=>'sr-only' )); ?>
		<?php echo $form->textField($model,'username' , array('class'=>'' , 'placeholder'=>$model->attributeLabels()['username'] )); ?>
	</div>

	<div class=" form-group">
		<?php echo $form->labelEx($model,'password' , array('class'=>'sr-only' )); ?>
		<?php echo $form->passwordField($model,'password' , array('class'=>'form-control' , 'placeholder'=>$model->attributeLabels()['password'] )); ?>
		
	</div>

	<div class=" rememberMe  ">
		<?php echo $form->checkBox($model,'rememberMe'  , array('class' =>'login-checkbox')); ?>
	</div>
	<button  type="submit" class="btn btn-default login-submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
	  
<?php echo $form->errorSummary($model); ?>

<?php $this->endWidget();  
else:
echo 'لوحة التحكم الرئيسية' ;
endif ; 


?>
  
  <div   class='container col-lg-4 col-lg-offset-2 '>
    <div class="slide-image">
			<img src="/mockups/images/slide-img.jpg">
	</div>
	  <div class="slide-bottom">
			<img class="pull-left" src="/mockups/images/slide-prev.png">
			<img class="pull-right" src="/mockups/images/slide-next.png">
			<p>نص يأتي هنا عن الموقع</p>
			<div class="clear"></div>
		</div>
  </div>

</div>

