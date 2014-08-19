<?php
/* @var $this AttendenceController */
/* @var $model Attendence */
?>

<?php
$this->breadcrumbs=array(
	'Attendences'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Attendence', 'url'=>array('index')),
	array('label'=>'Create Attendence', 'url'=>array('create')),
	array('label'=>'View Attendence', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Attendence', 'url'=>array('admin')),
);
?>

    <h1>Update Attendence <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>