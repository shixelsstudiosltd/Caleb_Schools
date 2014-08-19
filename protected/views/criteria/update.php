<?php
/* @var $this CriteriaController */
/* @var $model Criteria */
?>

<?php
$this->breadcrumbs=array(
	'Criterias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Criteria', 'url'=>array('index')),
	array('label'=>'Create Criteria', 'url'=>array('create')),
	array('label'=>'View Criteria', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Criteria', 'url'=>array('admin')),
);
?>

    <h1>Update Criteria <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>