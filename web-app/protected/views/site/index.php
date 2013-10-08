<div class="jumbotron" >
  <div class="container " >
  
  <?php if(Yii::app()->user->isGuest) :
   $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'htmlOptions' => array('role'=>"form"  , 'style'=>"background:white; padding:10px" , 'class' =>' panel panel-default col-lg-3   form-inline' , 'action'=>'/site/login'),
	'enableClientValidation'=>true,
	'action'=>'/site/login',
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

  	
  	<br/>


	<div class="form-group">
		<?php echo $form->labelEx($model,'school_id' , array('class'=>'sr-only' ) ); ?>
		<?php echo $form->dropDownList($model,'school_id' ,  Schools::model()->getList()  , array('class'=>'selectpicker' )); ?>
	</div>

	<div class=" form-group">
		<?php echo $form->labelEx($model,'username' , array('class'=>'sr-only' )); ?>
		<?php echo $form->textField($model,'username' , array('class'=>'' , 'placeholder'=>$model->attributeLabels()['username'] )); ?>
	</div>

	<div class=" form-group">
		<?php echo $form->labelEx($model,'password' , array('class'=>'sr-only' )); ?>
		<?php echo $form->passwordField($model,'password' , array('class'=>'form-control' , 'placeholder'=>$model->attributeLabels()['password'] )); ?>
		
	</div>

	<div class=" rememberMe  checkbox">
	<?php echo $form->label($model,'rememberMe' ) ; ?>
		<?php echo $form->checkBox($model,'rememberMe' ); ?>
	</div>
	<button type="submit" class="btn btn-default">تسجيل الدخول</button>
	  


<?php echo $form->errorSummary($model); ?>

<?php $this->endWidget(); 
else:
echo 'لوحة التحكم الرئيسية' ;
endif ; 


?>
  
  <div  style="background:white" class='container col-lg-4 col-lg-offset-2 '>
  	<div class="col-lg-1	 ">
	  	<center> <h1> الكتاب  </h1> <p> لإدارة العملية التعليمية </p></center>
	</div>
    <div class="col-lg-1 ">
		<img src="/images/book.jpeg" />   
	</div>
  </div>
</div>

</div>