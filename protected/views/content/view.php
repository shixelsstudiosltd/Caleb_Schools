<?php
/* @var $this ContentController */
/* @var $model Content */
?>

<?php
$this->breadcrumbs=array(
	'Contents'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Content', 'url'=>array('index')),
	array('label'=>'Create Content', 'url'=>array('create')),
	array('label'=>'Update Content', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Content', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Content', 'url'=>array('admin')),
);
?>

<h1>View Content #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'create_date',
		'filename',
		'teacher_teacher_id',
		'student_student_id',
		'task_id',
		'timestamp',
		'createby',
		'update_date',
		'create_time',
	),
)); ?>