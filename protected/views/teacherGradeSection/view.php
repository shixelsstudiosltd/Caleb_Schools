<?php
/* @var $this TeacherGradeSectionController */
/* @var $model TeacherGradeSection */
?>

<?php
$this->breadcrumbs=array(
	'Teacher Grade Sections'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TeacherGradeSection', 'url'=>array('index')),
	array('label'=>'Create TeacherGradeSection', 'url'=>array('create')),
	array('label'=>'Update TeacherGradeSection', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TeacherGradeSection', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TeacherGradeSection', 'url'=>array('admin')),
);
?>

<h1>View TeacherGradeSection #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'teacher_teacher_id',
		'course_id',
		'timestamp',
		'createby',
		'update_date',
		'create_time',
		'grade_section_id',
	),
)); ?>