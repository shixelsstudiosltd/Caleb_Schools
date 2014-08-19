<?php
/* @var $this TeacherController */
/* @var $model Teacher */
?>

<?php
$this->breadcrumbs=array(
	'Teachers'=>array('index'),
	$model->teacher_id=>array('view','id'=>$model->teacher_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Teacher', 'url'=>array('index')),
	array('label'=>'Create Teacher', 'url'=>array('create')),
	array('label'=>'View Teacher', 'url'=>array('view', 'id'=>$model->teacher_id)),
	array('label'=>'Manage Teacher', 'url'=>array('admin')),
);
?>

    <h1>Update Teacher <?php echo $model->teacher_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>