<?php
/* @var $this TeacherSubjectsClassesController */
/* @var $model TeacherSubjectsClasses */

$this->breadcrumbs=array(
	'Teacher Subjects Classes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TeacherSubjectsClasses', 'url'=>array('index')),
	array('label'=>'Create TeacherSubjectsClasses', 'url'=>array('create')),
	array('label'=>'View TeacherSubjectsClasses', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TeacherSubjectsClasses', 'url'=>array('admin')),
);
?>

<h1>Update TeacherSubjectsClasses <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>