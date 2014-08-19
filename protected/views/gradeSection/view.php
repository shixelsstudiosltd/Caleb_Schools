<?php
/* @var $this GradeSectionController */
/* @var $model GradeSection */
?>

<?php
$this->breadcrumbs=array(
	'Grade Sections'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List GradeSection', 'url'=>array('index')),
	array('label'=>'Create GradeSection', 'url'=>array('create')),
	array('label'=>'Update GradeSection', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete GradeSection', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GradeSection', 'url'=>array('admin')),
);
?>

<h1>View GradeSection #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'section_id',
		'timestamp',
		'createby',
		'update_date',
		'create_time',
		'grade_id',
	),
)); ?>