<?php
/* @var $this TeacherController */
/* @var $model Teacher */
?>

<?php
$this->breadcrumbs=array(
	'Teachers'=>array('index'),
	$model->teacher_id,
);

$this->menu=array(
	array('label'=>'List Teacher', 'url'=>array('index')),
	array('label'=>'Create Teacher', 'url'=>array('create')),
	array('label'=>'Update Teacher', 'url'=>array('update', 'id'=>$model->teacher_id)),
	array('label'=>'Delete Teacher', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->teacher_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Teacher', 'url'=>array('admin')),
);
?>

<h1>View Teacher #<?php echo $model->teacher_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'teacher_id',
		'firstname',
		'lastname',
		'address',
		'age',
		'gender',
		'officehours_start',
		'officehour_end',
		'timestamp',
		'createby',
		'update_date',
		'create_time',
	),
)); ?>