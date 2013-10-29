<?php
/* @var $this StudentController */
/* @var $model Student */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'student-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'htmlOptions'=>array('role'=>'form' , 'class'=>'form-horizontal'),
	'enableAjaxValidation'=>false,	
)); ?>
	<br/>
	<?php echo $form->errorSummary($model); ?>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'user_name',  array('class'=>'col-lg-3 control-label '  )); ?>
		<div class="col-lg-5">
			<?php echo $form->textField($model,'user_name' ,  array('class' => 'form-control', )); ?>
			<?php echo $form->error($model,'user_name'); ?>
		</div>
	</div>

	
	<div class="form-group">
		<?php echo $form->labelEx($model,'first_name',  array('class'=>'col-lg-3 control-label'  )); ?>
		<div class="col-lg-5">
			<?php echo $form->textField($model,'first_name' ,  array('class' => 'form-control', )); ?>
			<?php echo $form->error($model,'first_name'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'second_name',  array('class'=>'col-lg-3 control-label'  )); ?>
		<div class='col-lg-5' >
			<?php echo $form->textField($model,'second_name',  array('class' => 'form-control', ) ); ?>
			<?php echo $form->error($model,'second_name'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'third_name',  array('class'=>'col-lg-3 control-label'  )); ?>
		<div class='col-lg-5' >
			<?php echo $form->textField($model,'third_name'); ?>
			<?php echo $form->error($model,'third_name'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'fourth_name',  array('class'=>'col-lg-3 control-label'  )); ?>
		<div class='col-lg-5' >
			<?php echo $form->textField($model,'fourth_name'); ?>
			<?php echo $form->error($model,'fourth_name'); ?>
		</div>
	</div>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'gender',  array('class'=>'col-lg-3 '  )); ?>
		<div class='col-lg-5' >
			<?php echo  $form->radioButtonList($model,'gender',array('1'=>'ذكر','2'=>'انثى'),array('style'=>'display:inline' , 'separator'=>'', 'labelOptions'=>array('style'=>'display:inline'))); ?><?php //echo $form->dropDownList($model,'gender' , array( 1=>'ذكر' ,2=>'انثى' ) ,array('class'=>'selectpicker'   )); ?>
			<?php echo $form->error($model,'gender'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php 
		echo $form->labelEx($model,'birth_date' , array('class'=>'col-lg-3 control-label'  )  ) ;  ?>
		<div class='col-lg-5' > 
			<?php 
			$this->widget('zii.widgets.jui.CJuiDatePicker',array('name'=>'Student[birth_date]',));  
			echo $form->error($model,'birth_date');
			?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'birth_location'  ,array('class'=>'col-lg-3 control-label'  )); ?>
		<div class='col-lg-5' >
			<?php echo $form->textField($model,'birth_location'); ?>
			<?php echo $form->error($model,'birth_location'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'address' , array('class'=>'col-lg-3 control-label'  )); ?>
		<div class='col-lg-5' >
			<?php echo $form->textArea($model,'address',array('rows'=>3, 'cols'=>50)); ?>
			<?php echo $form->error($model,'address'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'mobiles' , array('class'=>'col-lg-3 control-label'  )); ?>
		<div class='col-lg-5' >
			<?php echo $form->textField($model,'mobiles'); ?>
			<?php echo $form->error($model,'mobiles'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'land_line' , array('class'=>'col-lg-3 control-label'  )); ?>
		<div class='col-lg-5' >
			<?php echo $form->textField($model,'land_line',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'land_line'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'national_id' , array('class'=>'col-lg-3 control-label'  )); ?>
		<div class='col-lg-5' >
			<?php echo $form->textField($model,'national_id',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'national_id'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'national_id_type' ,array('class'=>'col-lg-3 control-label'  )); ?>
		<div class='col-lg-5' >
			<?php echo $form->textField($model,'national_id_type'); ?>
			<?php echo $form->error($model,'national_id_type'); ?>
		</div>
	</div>

	<div class="row buttons col-lg-3">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'إنشاء' : 'حفظ'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
