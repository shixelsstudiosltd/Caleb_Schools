<?php
/* @var $this CriteriaController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Criterias',
);

$this->menu=array(
	array('label'=>'Create Criteria','url'=>array('create')),
	array('label'=>'Manage Criteria','url'=>array('admin')),
);
?>

<h1>Criterias</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>