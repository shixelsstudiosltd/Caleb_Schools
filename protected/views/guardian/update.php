<?php
/* @var $this GuardianController */
/* @var $model Guardian */
?>

<?php
$this->breadcrumbs=array(
	'Guardians'=>array('index'),
	$model->guardian_id=>array('view','id'=>$model->guardian_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Guardian', 'url'=>array('index')),
	array('label'=>'Create Guardian', 'url'=>array('create')),
	array('label'=>'View Guardian', 'url'=>array('view', 'id'=>$model->guardian_id)),
	array('label'=>'Manage Guardian', 'url'=>array('admin')),
);
?>

    <h1>Update Guardian <?php echo $model->guardian_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>