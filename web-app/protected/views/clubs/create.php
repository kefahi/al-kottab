<?php
/* @var $this ClubsController */
/* @var $model Clubs */

$this->breadcrumbs=array(
	'Clubs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Clubs', 'url'=>array('index')),
	array('label'=>'Manage Clubs', 'url'=>array('admin')),
);
?>

<h1>Create Clubs</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>