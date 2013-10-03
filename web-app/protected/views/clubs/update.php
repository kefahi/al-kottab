<?php
/* @var $this ClubsController */
/* @var $model Clubs */

$this->breadcrumbs=array(
	'Clubs'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Clubs', 'url'=>array('index')),
	array('label'=>'Create Clubs', 'url'=>array('create')),
	array('label'=>'View Clubs', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Clubs', 'url'=>array('admin')),
);
?>

<h1>Update Clubs <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>