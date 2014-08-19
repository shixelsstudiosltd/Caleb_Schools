<?php
/* @var $this TaskController */
/* @var $model Task */
?>

<?php
$this->breadcrumbs=array(
	'Tasks'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Task', 'url'=>array('index')),
	array('label'=>'Create Task', 'url'=>array('create')),
	array('label'=>'Update Task', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Task', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Task', 'url'=>array('admin')),
);
?>

<h1>View Task #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'title',
		'date_given',
		'due_date',
		'type',
		'taskcol',
		'description',
		'total_marks',
		'teacher_teacher_id',
		'content_id',
		'timestamp',
		'createby',
		'update_date',
		'create_time',
		'grade_section_id',
	),
)); ?>