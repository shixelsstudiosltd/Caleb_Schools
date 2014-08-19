<?php
/* @var $this StudentGradeSectionController */
/* @var $model StudentGradeSection */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'student-grade-section-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->textFieldControlGroup($model,'student_student_id',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'course_id',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'timestamp',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'createby',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'update_date',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'create_time',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'grade_section_id',array('span'=>5)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->