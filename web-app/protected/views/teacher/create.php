<?php
/* @var $this TeacherController */
/* @var $model Teacher */

$this->breadcrumbs=array(
	'Teachers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Teacher', 'url'=>array('index')),
	array('label'=>'Manage Teacher', 'url'=>array('admin')),
);
?>

<div class="white" style="background:white;">
<center style="padding-top:5px">
	<h1>تسجيل معلم </h1>
</center>
<br/>

<?php $this->renderPartial('/users/_form', array('model'=>$model)); ?>
</div>
