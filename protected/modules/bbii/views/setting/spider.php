<?php
/* @var $this SettingController */
/* @var $model BbiiSpider */

$this->bbii_breadcrumbs=array(
	Yii::t('BbiiModule.bbii', 'Forum')=>array('forum/index'),
	Yii::t('BbiiModule.bbii', 'Settings')=>array('setting/index'),
	Yii::t('BbiiModule.bbii', 'Webspiders')
);

$item = array(
	array('label'=>Yii::t('BbiiModule.bbii', 'Settings'), 'url'=>array('setting/index')),
	array('label'=>Yii::t('BbiiModule.bbii', 'Forum layout'), 'url'=>array('setting/layout')),
	array('label'=>Yii::t('BbiiModule.bbii', 'Member groups'), 'url'=>array('setting/group')),
	array('label'=>Yii::t('BbiiModule.bbii', 'Moderators'), 'url'=>array('setting/moderator'))
);

Yii::app()->clientScript->registerScript('confirmation', "
var confirmation = '" . Yii::t('BbiiModule.bbii', 'Are you sure that you want to delete this webspider?') . "'
", CClientScript::POS_BEGIN);
?>
<div id="bbii-wrapper">
	<?php echo $this->renderPartial('_header', array('item'=>$item)); ?>
	
	<?php echo CHtml::button(Yii::t('BbiiModule.bbii', 'New webspider'), array('onclick'=>'BBiiSetting.EditSpider()', 'class'=>'down35')); ?>
	
	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'spider-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		'columns'=>array(
			array(
				'name'=>'name',
				'type'=>'raw',
				'value'=>'CHtml::link($data->name, $data->url, array("target"=>"_new")) . "<span style=\"display:none;\">{$data->id}</span>"',
			),
			'user_agent',
			array(
				'header' => Yii::t('BbiiModule.bbii', 'Hits'),
				'value' => '$data->hits',
				'htmlOptions' => array('style'=>'text-align:center;'),
			),
			array(
				'header' => Yii::t('BbiiModule.bbii', 'Last visit'),
				'value' => 'DateTimeCalculation::full($data->last_visit)',
			),
			array(
				'class'=>'CButtonColumn',
				'template'=>'{update}',
				'buttons' => array(
					'update' => array(
						'click'=>'js:function($data) { BBiiSetting.EditSpider($(this).closest("tr").children("td:first").children("span").text(), "' . $this->createAbsoluteUrl('setting/getSpider') .'");return false; }',
					),
				)
			),
		),
	)); ?>
</div>

<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
    'id'=>'dlgEditSpider',
	'theme'=>$this->module->juiTheme,
    'options'=>array(
        'title'=>'Edit',
        'autoOpen'=>false,
		'modal'=>true,
		'width'=>700,
		'show'=>'fade',
		'buttons'=>array(
			Yii::t('BbiiModule.bbii', 'Delete')=>'js:function(){ BBiiSetting.DeleteSpider("' . $this->createAbsoluteUrl('setting/deleteSpider') .'"); }',
			Yii::t('BbiiModule.bbii', 'Save')=>'js:function(){ BBiiSetting.SaveSpider("' . $this->createAbsoluteUrl('setting/saveSpider') .'"); }',
			Yii::t('BbiiModule.bbii', 'Cancel')=>'js:function(){ $(this).dialog("close"); }',
		),
    ),
));

    echo $this->renderPartial('_editSpider', array('model'=>$model));

$this->endWidget('zii.widgets.jui.CJuiDialog');
?>