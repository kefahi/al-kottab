<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>تسجيل الدخول</h1>


<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'htmlOptions' => array('role'=>"form"),
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<div class="row form-group">
		<?php echo $form->labelEx($model,'school_id'); ?>
		<?php echo $form->dropDownList($model,'school_id' ,  Schools::model()->getList() ); ?>
		<?php echo $form->error($model,'school_id'); ?>
	</div>

	<div class="row form-group">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username' , array('class'=>'form-control' , 'placeholder'=>$model->attributeLabels()['username'] )); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row form-group">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password' , array('class'=>'form-control' , 'placeholder'=>$model->attributeLabels()['password'] )); ?>
		<?php echo $form->error($model,'password'); ?>
		
	</div>

	<div class="row rememberMe  checkbox">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe' ) ; ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row ">
		<?php echo CHtml::submitButton('تسجيل الدخول' , array('class'=>'btn btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
