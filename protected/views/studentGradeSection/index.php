<?php
/* @var $this StudentGradeSectionController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Student Grade Sections',
);

$this->menu=array(
	array('label'=>'Create StudentGradeSection','url'=>array('create')),
	array('label'=>'Manage StudentGradeSection','url'=>array('admin')),
);
?>

<h1>Student Grade Sections</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>