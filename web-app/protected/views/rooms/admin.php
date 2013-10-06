<?php
/* @var $this RoomsController */
/* @var $model Rooms */

$this->breadcrumbs=array(
	'Rooms'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Rooms', 'url'=>array('index')),
	array('label'=>'Create Rooms', 'url'=>array('create')),
); ?>

<h1>الغرف الصفية</h1>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'rooms-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'created_at',
		'updated_at',
		'school_id',
		'capacity',
		/*
		'details',
		*/
		
	),
)); 