<?php
/* @var $this AttendenceController */
/* @var $model Attendence */
?>

<?php
$this->breadcrumbs=array(
	'Attendences'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Attendence', 'url'=>array('index')),
	array('label'=>'Manage Attendence', 'url'=>array('admin')),
);
?>

<h1>Create Attendence</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>