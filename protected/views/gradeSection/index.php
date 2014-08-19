<?php
/* @var $this GradeSectionController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Grade Sections',
);

$this->menu=array(
	array('label'=>'Create GradeSection','url'=>array('create')),
	array('label'=>'Manage GradeSection','url'=>array('admin')),
);
?>

<h1>Grade Sections</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>