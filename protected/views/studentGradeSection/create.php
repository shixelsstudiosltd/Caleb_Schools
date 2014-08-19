<?php
/* @var $this StudentGradeSectionController */
/* @var $model StudentGradeSection */
?>

<?php
$this->breadcrumbs=array(
	'Student Grade Sections'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StudentGradeSection', 'url'=>array('index')),
	array('label'=>'Manage StudentGradeSection', 'url'=>array('admin')),
);
?>

<h1>Create StudentGradeSection</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>