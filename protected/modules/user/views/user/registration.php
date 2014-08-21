<?php 
    $this->layout='//layouts/front';
    $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Registration");
    $this->breadcrumbs=array(
	UserModule::t("Registration"),
    );
?>
<style>
    .mb { margin-bottom: 10px;}
    .cc {color:#000 !important; font-size: 15px !important;}
</style>

<div class="loginpanel">
    <div class="registrationLinear">
        <?php $form=$this->beginWidget('UActiveForm', array(
                'id'=>'registration-form',
                'enableAjaxValidation'=>true,
                'disableAjaxValidationAttributes'=>array('RegistrationForm_verifyCode'),
                'clientOptions'=>array(
                        'validateOnSubmit'=>true,
                ),
                'htmlOptions' => array('enctype'=>'multipart/form-data'),
                )); 
        ?>
        <div class="logo animate0 bounceIn">
            <a href="<?php echo Yii::app()->baseUrl;?>/">
                <img src="<?php echo Yii::app()->request->baseUrl;?>/images/logo.png" alt="" />
            </a>
        </div>
        
        <?php if(Yii::app()->user->hasFlash('registration')): ?>
        <div class="success">
        <?php echo Yii::app()->user->getFlash('registration'); ?>
        </div>
        <?php else: ?>

        
        <?php echo $form->errorSummary(array($model,$profile)); ?>
        
        <div class="inputwrapper bounceIn">
            <h4 style="margin-bottom: 10px; color: #0866c6; font-weight: bolder;">Registration:</h4>
        </div>
	<p class="note"><?php echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?></p>
	
	<div class="mb">
	<?php echo $form->labelEx($model,'username'); ?>
	<?php echo $form->textField($model,'username'); ?>
	<?php echo $form->error($model,'username'); ?>
	</div>
	
	<div class="mb">
	<?php echo $form->labelEx($model,'password'); ?>
	<?php echo $form->passwordField($model,'password'); ?>
	<?php echo $form->error($model,'password'); ?>
	<p class="hint">
	<?php echo UserModule::t("Minimal password length 4 symbols."); ?>
	</p>
	</div>
	
	<div class="mb">
	<?php echo $form->labelEx($model,'verifyPassword'); ?>
	<?php echo $form->passwordField($model,'verifyPassword'); ?>
	<?php echo $form->error($model,'verifyPassword'); ?>
	</div>
	
	<div class="mb">
	<?php echo $form->labelEx($model,'email',array('class'=>'cc')); ?>
	<?php echo $form->textField($model,'email'); ?>
	<?php echo $form->error($model,'email'); ?>
	</div>
	
        <?php 
		$profileFields=$profile->getFields();
		if ($profileFields) {
			foreach($profileFields as $field) {
			?>
	<div class="mb">
		<?php echo $form->labelEx($profile,$field->varname); ?>
		<?php 
		if ($widgetEdit = $field->widgetEdit($profile)) {
			echo $widgetEdit;
		} elseif ($field->range) {
			echo $form->dropDownList($profile,$field->varname,Profile::range($field->range));
		} elseif ($field->field_type=="TEXT") {
			echo$form->textArea($profile,$field->varname,array('rows'=>6, 'cols'=>50));
		} else {
			echo $form->textField($profile,$field->varname,array('size'=>60,'maxlength'=>(($field->field_size)?$field->field_size:255)));
		}
		 ?>
		<?php echo $form->error($profile,$field->varname); ?>
	</div>	
			<?php
			}
		}
?>
	<?php if (UserModule::doCaptcha('registration')): ?>
	<div class="mb">
		<?php echo $form->labelEx($model,'verifyCode',array('class'=>'cc')); ?>
		
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		<?php echo $form->error($model,'verifyCode'); ?>
		
		<p class="hint"><?php echo UserModule::t("Please enter the letters as they are shown in the image above."); ?>
		<br/><?php echo UserModule::t("Letters are not case-sensitive."); ?></p>
	</div>
	<?php endif; ?>
	
	<div class="inputwrapper bounceIn">
		<?php echo CHtml::submitButton(UserModule::t("Register"),array('class'=>'custom-login-btn')); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
</div>
<?php endif; ?>