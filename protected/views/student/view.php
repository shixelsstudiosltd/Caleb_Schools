<?php
/* @var $this StudentController */
/* @var $model Student */
?>

<?php
$this->breadcrumbs=array(
	'Students'=>array('index'),
	$model->student_id,
);

$this->menu=array(
	array('label'=>'List Student', 'url'=>array('index')),
	array('label'=>'Create Student', 'url'=>array('create')),
	array('label'=>'Update Student', 'url'=>array('update', 'id'=>$model->student_id)),
	array('label'=>'Delete Student', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->student_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Student', 'url'=>array('admin')),
);
?>

<h1>View Student #<?php echo $model->student_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'student_id',
		'firstname',
		'lastname',
		'age',
		'gender',
		'address',
		'timestamp',
		'createby',
		'update_date',
		'create_time',
		'guardian_id',
	),
)); ?>