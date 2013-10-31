<?php
/* @var $this StudentController */
/* @var $model Student */

$this->breadcrumbs=array(
	'الطلاب'=>array('index'),
	$model->first_name ." " .$model->fourth_name=>array('view','id'=>$model->id),
	'تحديث',
);

$this->menu=array(
	array('label'=>'List Student', 'url'=>array('index')),
	array('label'=>'Create Student', 'url'=>array('create')),
	array('label'=>'View Student', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Student', 'url'=>array('admin')),
);
?>

<h1>تعديل معلومات طالب </h1>
<br />

<?php $this->renderPartial('_form', array('model'=>$model)); ?>