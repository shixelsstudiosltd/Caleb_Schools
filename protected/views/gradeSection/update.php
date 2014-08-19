<?php
/* @var $this GradeSectionController */
/* @var $model GradeSection */
?>

<?php
$this->breadcrumbs=array(
	'Grade Sections'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GradeSection', 'url'=>array('index')),
	array('label'=>'Create GradeSection', 'url'=>array('create')),
	array('label'=>'View GradeSection', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage GradeSection', 'url'=>array('admin')),
);
?>

    <h1>Update GradeSection <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>