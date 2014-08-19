<?php
/* @var $this TeacherGradeSectionController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Teacher Grade Sections',
);

$this->menu=array(
	array('label'=>'Create TeacherGradeSection','url'=>array('create')),
	array('label'=>'Manage TeacherGradeSection','url'=>array('admin')),
);
?>

<h1>Teacher Grade Sections</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>