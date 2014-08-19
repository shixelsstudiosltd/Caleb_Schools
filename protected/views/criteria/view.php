<?php
/* @var $this CriteriaController */
/* @var $model Criteria */
?>

<?php
$this->breadcrumbs=array(
	'Criterias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Criteria', 'url'=>array('index')),
	array('label'=>'Create Criteria', 'url'=>array('create')),
	array('label'=>'Update Criteria', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Criteria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Criteria', 'url'=>array('admin')),
);
?>

<h1>View Criteria #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'entity',
		'value',
		'timestamp',
		'createby',
		'update_date',
		'create_time',
	),
)); ?>