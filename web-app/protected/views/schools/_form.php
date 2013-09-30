<?php
/* @var $this SchoolsController */
/* @var $model Schools */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'schools-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('role'=>'form' , 'class'=>'form-horizontal')
)); ?>
	<br />
	<?php echo $form->errorSummary($model); ?>

	
	<div class="form-group">
		<?php echo $form->labelEx($model,'name' ,  array('class'=>'col-lg-1 control-label'  )); ?>
		<div class='col-lg-5' >
			<?php echo $form->textField($model,'name', array('class'=>'form-control '  ) ) ; ?>
			<?php echo $form->error($model,'name'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'description' ,  array('class'=>'col-lg-1 control-label'  )); ?>
		<div class='col-lg-5' >
			<?php echo $form->textArea($model,'description',array('rows'=>3, 'cols'=>50 , 'class'=>'form-control')); ?>
			<?php echo $form->error($model,'description'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'address' ,  array('class'=>'col-lg-1 control-label'  )); ?>
		<div class='col-lg-5' >
			<?php echo $form->textField($model,'address',array( 'class'=>'form-control')); ?>
			<?php echo $form->error($model,'address'); ?>
		</div>
	</div>


	<div class="form-group">
		<?php echo $form->labelEx($model,'phones' ,  array('class'=>'col-lg-1 control-label'  )); ?>
		<div class='col-lg-5' >
			<?php echo $form->textField($model,'phones',array( 'class'=>'form-control')); ?>
			<?php echo $form->error($model,'phones'); ?>
		</div>
	</div>


	<div class="form-group">
		<?php echo $form->labelEx($model,'notes' ,  array('class'=>'col-lg-1 control-label'  )); ?>
		<div class='col-lg-5' >
			<?php echo $form->textArea($model,'notes',array( 'class'=>'form-control')); ?>
			<?php echo $form->error($model,'notes'); ?>
		</div>
	</div>

  <div class="form-group">
    <div class="col-lg-offset-5 col-lg-10">
    <?php echo  CHtml::submitButton('حفظ'  , array('class'=>"btn btn-default") ); ?>
    </div>
  </div>
	

<?php $this->endWidget(); ?>

</div><!-- form -->