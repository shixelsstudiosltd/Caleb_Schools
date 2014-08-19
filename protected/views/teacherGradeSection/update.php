<?php
/* @var $this TeacherGradeSectionController */
/* @var $model TeacherGradeSection */
?>

<?php
$this->breadcrumbs=array(
	'Teacher Grade Sections'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TeacherGradeSection', 'url'=>array('index')),
	array('label'=>'Create TeacherGradeSection', 'url'=>array('create')),
	array('label'=>'View TeacherGradeSection', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TeacherGradeSection', 'url'=>array('admin')),
);
?>

    <h1>Update TeacherGradeSection <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>