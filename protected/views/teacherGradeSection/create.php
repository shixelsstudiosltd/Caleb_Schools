<?php
/* @var $this TeacherGradeSectionController */
/* @var $model TeacherGradeSection */
?>

<?php
$this->breadcrumbs=array(
	'Teacher Grade Sections'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TeacherGradeSection', 'url'=>array('index')),
	array('label'=>'Manage TeacherGradeSection', 'url'=>array('admin')),
);
?>

<h1>Create TeacherGradeSection</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>