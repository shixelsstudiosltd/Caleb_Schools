<?php
/* @var $this StudentGradeSectionController */
/* @var $model StudentGradeSection */
?>

<?php
$this->breadcrumbs=array(
	'Student Grade Sections'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List StudentGradeSection', 'url'=>array('index')),
	array('label'=>'Create StudentGradeSection', 'url'=>array('create')),
	array('label'=>'Update StudentGradeSection', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete StudentGradeSection', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StudentGradeSection', 'url'=>array('admin')),
);
?>

<h1>View StudentGradeSection #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'student_student_id',
		'course_id',
		'timestamp',
		'createby',
		'update_date',
		'create_time',
		'grade_section_id',
	),
)); ?>