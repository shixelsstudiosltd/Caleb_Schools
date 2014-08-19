<?php
/* @var $this GradeSectionController */
/* @var $model GradeSection */
?>

<?php
$this->breadcrumbs=array(
	'Grade Sections'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GradeSection', 'url'=>array('index')),
	array('label'=>'Manage GradeSection', 'url'=>array('admin')),
);
?>

<h1>Create GradeSection</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>