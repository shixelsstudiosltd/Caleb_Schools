<?php
/* @var $this TeacherController */
/* @var $model Teacher */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'teacher-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->textFieldControlGroup($model,'teacher_id',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'firstname',array('span'=>5,'maxlength'=>250)); ?>

            <?php echo $form->textFieldControlGroup($model,'lastname',array('span'=>5,'maxlength'=>250)); ?>

            <?php echo $form->textFieldControlGroup($model,'address',array('span'=>5,'maxlength'=>45)); ?>

            <?php echo $form->textFieldControlGroup($model,'age',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'gender',array('span'=>5,'maxlength'=>45)); ?>

            <?php echo $form->textFieldControlGroup($model,'officehours_start',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'officehour_end',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'timestamp',array('span'=>5,'maxlength'=>45)); ?>

            <?php echo $form->textFieldControlGroup($model,'createby',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'update_date',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'create_time',array('span'=>5)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->