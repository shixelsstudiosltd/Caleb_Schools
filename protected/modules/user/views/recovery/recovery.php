<?php 
$this->pageTitle=Yii::app()->name . ' - Recover Password';
$this->layout = "//layouts/front";
?>


<div class="loginpanel">
    <div class="loginpanelinner">
        <div class="logo animate0 bounceIn">
            <img src="<?php echo Yii::app()->request->baseUrl;?>/images/logo.png" alt="" />
        </div>
        
        <?php echo CHtml::beginForm(); ?>
            <?php echo CHtml::errorSummary($form); ?>
        
                <?php if(Yii::app()->user->hasFlash('recoveryMessage')): ?>
                <div class="success">
                <?php echo Yii::app()->user->getFlash('recoveryMessage'); ?>
                </div>
                <?php else: ?>

                <div class="inputwrapper animate1 bounceIn">
                    <h4 style="margin-bottom: 10px; color: #0866c6;">Restore Password:</h4>
                </div>

                <div class="inputwrapper animate2 bounceIn">
                    <?php echo CHtml::activeTextField($form,'login_or_email',array('required'=>'required','placeholder'=>'Enter Username or Email')) ?>
                </div>

                <div class="inputwrapper animate3 bounceIn">
                    <?php echo CHtml::submitButton(UserModule::t("Restore"),array('class'=>'custom-login-btn')); ?>
                </div>
        <?php echo CHtml::endForm(); ?>
        <?php endif; ?>
    </div><!--loginpanelinner-->
</div><!--loginpanel-->
