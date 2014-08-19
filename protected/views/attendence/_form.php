<?php
/* @var $this AttendenceController */
/* @var $model Attendence */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'attendence-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->textFieldControlGroup($model,'date',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'status',array('span'=>5)); ?>

            <?php echo $form->textAreaControlGroup($model,'remarks',array('rows'=>6,'span'=>8)); ?>

            <?php echo $form->textFieldControlGroup($model,'student_id',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'course_id',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'teacher_id',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'timestamp',array('span'=>5)); ?>

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