<?php
/* @var $this GuardianController */
/* @var $model Guardian */
?>

<?php
$this->breadcrumbs=array(
	'Guardians'=>array('index'),
	$model->guardian_id,
);

$this->menu=array(
	array('label'=>'List Guardian', 'url'=>array('index')),
	array('label'=>'Create Guardian', 'url'=>array('create')),
	array('label'=>'Update Guardian', 'url'=>array('update', 'id'=>$model->guardian_id)),
	array('label'=>'Delete Guardian', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->guardian_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Guardian', 'url'=>array('admin')),
);
?>

<h1>View Guardian #<?php echo $model->guardian_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'guardian_id',
		'firstname',
		'lastname',
		'age',
		'gender',
		'address',
		'timestamp',
		'createby',
		'update_date',
		'create_time',
	),
)); ?>