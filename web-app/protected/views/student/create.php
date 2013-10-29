<?php
/* @var $this StudentController */
/* @var $model Student */

	$this->breadcrumbs=array(
		'Students'=>array('index'),
		'Create',
	);

	$this->menu=array(
		array('label'=>'List Student', 'url'=>array('index')),
		array('label'=>'Manage Student', 'url'=>array('admin')),
	);
?>
<div class="white" style="background:white;">
<center style="padding-top:5px">
	<h1>تسجيل طالب </h1>
</center>
<br/>

<?php $this->renderPartial('/users/_form', array('model'=>$model)); ?>
</div>