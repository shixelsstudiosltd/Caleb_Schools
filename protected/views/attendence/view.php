<?php
/* @var $this AttendenceController */
/* @var $model Attendence */
?>

<?php
$this->breadcrumbs=array(
	'Attendences'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Attendence', 'url'=>array('index')),
	array('label'=>'Create Attendence', 'url'=>array('create')),
	array('label'=>'Update Attendence', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Attendence', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Attendence', 'url'=>array('admin')),
);
?>

<h1>View Attendence #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'date',
		'status',
		'remarks',
		'student_id',
		'course_id',
		'teacher_id',
		'timestamp',
		'createby',
		'update_date',
		'create_time',
	),
)); ?>