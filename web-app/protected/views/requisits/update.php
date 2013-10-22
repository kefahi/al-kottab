<?php
/* @var $this RequisitsController */
/* @var $model Requisits */

$this->breadcrumbs=array(
	'Requisits'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Requisits', 'url'=>array('index')),
	array('label'=>'Create Requisits', 'url'=>array('create')),
	array('label'=>'View Requisits', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Requisits', 'url'=>array('admin')),
);
?>

<h1>Update Requisits <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>