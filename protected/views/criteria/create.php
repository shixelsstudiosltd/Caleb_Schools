<?php
/* @var $this CriteriaController */
/* @var $model Criteria */
?>

<?php
$this->breadcrumbs=array(
	'Criterias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Criteria', 'url'=>array('index')),
	array('label'=>'Manage Criteria', 'url'=>array('admin')),
);
?>

<h1>Create Criteria</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>