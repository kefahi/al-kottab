<?php
/* @var $this TeacherClassesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Teacher Classes',
);

$this->menu=array(
	array('label'=>'Create TeacherClasses', 'url'=>array('create')),
	array('label'=>'Manage TeacherClasses', 'url'=>array('admin')),
);
?>

<h1>Teacher Classes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
