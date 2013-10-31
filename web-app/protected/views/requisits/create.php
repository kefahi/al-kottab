<?php
/* @var $this RequisitsController */
/* @var $model Requisits */

$this->breadcrumbs=array(
	'Requisits'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Requisits', 'url'=>array('index')),
	array('label'=>'Manage Requisits', 'url'=>array('admin')),
);
?>

<h1>Create Requisits</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>