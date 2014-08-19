<?php
/* @var $this MarksController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Marks',
);

$this->menu=array(
	array('label'=>'Create Marks','url'=>array('create')),
	array('label'=>'Manage Marks','url'=>array('admin')),
);
?>

<h1>Marks</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>