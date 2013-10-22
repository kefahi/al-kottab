<?php
/* @var $this RequisitsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Requisits',
);

$this->menu=array(
	array('label'=>'Create Requisits', 'url'=>array('create')),
	array('label'=>'Manage Requisits', 'url'=>array('admin')),
);
?>

<h1>Requisits</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
