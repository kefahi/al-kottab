<?php
/* @var $this ClassesController */
/* @var $model Classes */

$this->breadcrumbs=array(
	'Classes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Classes', 'url'=>array('index')),
	array('label'=>'Manage Classes', 'url'=>array('admin')),
);
?>
	<center>
		<h1>إنشاء صف دراسي</h1>
	</center>
	<?php $this->renderPartial('_form', array('model'=>$model)); ?>
