<?php
/* @var $this StudentController */
/* @var $model Student */

$this->breadcrumbs=array(
	'الطلاب'=>array('index'),
	$model->first_name ." " .$model->fourth_name,
);

$this->menu=array(
	array('label'=>'List Student', 'url'=>array('index')),
	array('label'=>'Create Student', 'url'=>array('create')),
	array('label'=>'Update Student', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Student', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Student', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->first_name . ' '.$model->fourth_name ; ?></h1>
<button class="pull-left btn btn-primary btn-lg " onclick="location.href = '<?php echo $this->createUrl('/student/update')?>?id=<?php echo $model->id ?>'" > تعديل </button>
<div class="jumbotron">
  <div class="container ">
	<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'htmlOptions' =>array('class'=>'col-md-8'	),
		'attributes'=>array(
			'mobiles',
			'land_line',
			array('label'=>'مرحلة صفية' , 'value' => $model->class_id  .'-' . $model->grade_id),
			array('label'=>$model->attributeLabels()['created_at'] , 'value' => Yii::app()->dateFormatter->format('EEE، d LLLL، yyyy ', $model->created_at) ),
			array('label'=>$model->attributeLabels()['updated_at'] , 'value' => Yii::app()->dateFormatter->format('EEE، d LLLL، yyyy ', $model->updated_at) ),
	
		),
	)); ?>
  <div class='col-md-offset-7'  > <img src="http://marketing.yourcolor.net/wp-content/themes/1/framework/scripts/timthumb.php?src=http://marketing.yourcolor.net/wp-content/uploads/yourcolor-224-221x300.jpg&h=193&w=215&zc=1" /></div>

	</div>
</div>





<div class="panel-group" id="accordion">

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseInfo">
          معلومات الإتصال
        </a>
      </h4>
    </div>
    <div id="collapseInfo" class="panel-collapse collapse in">
      <div class="panel-body">
        <?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'htmlOptions' =>array('class'=>'' ),
    'attributes'=>array(
      'address',
      'mobiles',
      'land_line',
      array('label'=>$model->attributeLabels()['created_at'] , 'value' => Yii::app()->dateFormatter->format('EEE، d LLLL، yyyy ', $model->created_at) ),
      array('label'=>$model->attributeLabels()['updated_at'] , 'value' => Yii::app()->dateFormatter->format('EEE، d LLLL، yyyy ', $model->updated_at) ),
    ),
  )); ?>
      </div>
    </div>
  </div>




  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          معلومات عامة
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
        <?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'htmlOptions' =>array('class'=>'' ),
    'attributes'=>array(
      'first_name',
      'second_name',
      'third_name',
      'fourth_name',
      'address',
      array('label'=>$model->attributeLabels()['created_at'] , 'value' => Yii::app()->dateFormatter->format('EEE، d LLLL، yyyy ', $model->created_at) ),
      array('label'=>$model->attributeLabels()['updated_at'] , 'value' => Yii::app()->dateFormatter->format('EEE، d LLLL، yyyy ', $model->updated_at) ),

    ),
  )); ?>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          معلومات ولي الأمر
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        <?php
        if(!isset($model->guardian)) echo 'لم يتم ضبطه';
        else   $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model->guardian,
		'htmlOptions' =>array('class'=>''	),
		'attributes'=>array(
			'address',
			'mobiles',
			'land_line',
			
		),
	)); ?>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          الأكاديمي
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
      لا يوجد
        <?php          ?>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFourth">
          السلوك
        </a>
      </h4>
    </div>
    <div id="collapseFourth" class="panel-collapse collapse">
      <div class="panel-body">
        لم يتم ضبطه
      </div>
    </div>
  </div>

</div>