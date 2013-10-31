<?php
/* @var $this GradesController */
/* @var $model Grades */

$this->breadcrumbs=array(
	'Grades'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Grades', 'url'=>array('index')),
	array('label'=>'Manage Grades', 'url'=>array('admin')),
);
?>
<div class="white" style="background:white;">
	<center>
		<h1>انشاء مرحلة دراسية</h1>
	</center>
	<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>