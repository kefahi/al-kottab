<?php
/* @var $this UsersController */
/* @var $data Users */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_name')); ?>:</b>
	<?php echo CHtml::encode($data->user_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
	<?php echo CHtml::encode($data->first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('second_name')); ?>:</b>
	<?php echo CHtml::encode($data->second_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('third_name')); ?>:</b>
	<?php echo CHtml::encode($data->third_name); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fourth_name')); ?>:</b>
	<?php echo CHtml::encode($data->fourth_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
	<?php echo CHtml::encode($data->gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('birth_date')); ?>:</b>
	<?php echo CHtml::encode($data->birth_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('birth_location')); ?>:</b>
	<?php echo CHtml::encode($data->birth_location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mobiles')); ?>:</b>
	<?php echo CHtml::encode($data->mobiles); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('land_line')); ?>:</b>
	<?php echo CHtml::encode($data->land_line); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('national_id')); ?>:</b>
	<?php echo CHtml::encode($data->national_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('national_id_type')); ?>:</b>
	<?php echo CHtml::encode($data->national_id_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('school_id')); ?>:</b>
	<?php echo CHtml::encode($data->school_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('guardian_id')); ?>:</b>
	<?php echo CHtml::encode($data->guardian_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('class_id')); ?>:</b>
	<?php echo CHtml::encode($data->class_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grade_id')); ?>:</b>
	<?php echo CHtml::encode($data->grade_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('student_data')); ?>:</b>
	<?php echo CHtml::encode($data->student_data); ?>
	<br />

	*/ ?>

</div>