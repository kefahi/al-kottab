<?php
/* @var $this TeacherClassesController */
/* @var $model TeacherClasses */

$this->breadcrumbs=array(
	'Teacher Classes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TeacherClasses', 'url'=>array('index')),
	array('label'=>'Create TeacherClasses', 'url'=>array('create')),
	array('label'=>'View TeacherClasses', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TeacherClasses', 'url'=>array('admin')),
);
?>

<h1>Update TeacherClasses <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>