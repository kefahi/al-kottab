<?php
/* @var $this TeacherSubjectsClassesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Teacher Subjects Classes',
);

$this->menu=array(
	array('label'=>'Create TeacherSubjectsClasses', 'url'=>array('create')),
	array('label'=>'Manage TeacherSubjectsClasses', 'url'=>array('admin')),
);
?>

<h1>Teacher Subjects Classes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
