<?php
/* @var $this GuardianController */
/* @var $model Guardian */
?>

<?php
$this->breadcrumbs=array(
	'Guardians'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Guardian', 'url'=>array('index')),
	array('label'=>'Manage Guardian', 'url'=>array('admin')),
);
?>

<h1>Create Guardian</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>