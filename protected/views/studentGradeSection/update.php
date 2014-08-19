<?php
/* @var $this StudentGradeSectionController */
/* @var $model StudentGradeSection */
?>

<?php
$this->breadcrumbs=array(
	'Student Grade Sections'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StudentGradeSection', 'url'=>array('index')),
	array('label'=>'Create StudentGradeSection', 'url'=>array('create')),
	array('label'=>'View StudentGradeSection', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage StudentGradeSection', 'url'=>array('admin')),
);
?>

    <h1>Update StudentGradeSection <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>