<?php
/* @var $this MarksController */
/* @var $model Marks */
?>

<?php
$this->breadcrumbs=array(
	'Marks'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Marks', 'url'=>array('index')),
	array('label'=>'Create Marks', 'url'=>array('create')),
	array('label'=>'Update Marks', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Marks', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Marks', 'url'=>array('admin')),
);
?>

<h1>View Marks #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'obtained_marks',
		'task_id',
		'course_id',
		'teacher_teacher_id',
		'student_student_id',
		'timestamp',
		'createby',
		'update_date',
		'create_time',
	),
)); ?>