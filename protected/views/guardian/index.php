<?php
/* @var $this GuardianController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Guardians',
);

$this->menu=array(
	array('label'=>'Create Guardian','url'=>array('create')),
	array('label'=>'Manage Guardian','url'=>array('admin')),
);
?>

<h1>Guardians</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>