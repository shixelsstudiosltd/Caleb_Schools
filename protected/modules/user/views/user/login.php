<?php 
    $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Login");
    $this->layout='//layouts/front'; 
?>

<div class="loginpanel">
    <div class="loginpanelinner">
        <div class="logo animate0 bounceIn">
            <img src="<?php echo Yii::app()->request->baseUrl;?>/images/logo.png" alt="" />
        </div>
        
        <?php if(Yii::app()->user->hasFlash('loginMessage')): ?>
        <div class="success">
            <?php echo Yii::app()->user->getFlash('loginMessage'); ?>
        </div>
        <?php endif; ?>
        
        <?php echo CHtml::beginForm(); ?>
                <?php echo CHtml::errorSummary($model); ?>
                
                <div class="inputwrapper animate1 bounceIn">
                    <?php echo CHtml::activeTextField($model,'username',array('required'=>'required','placeholder'=>'Username')); ?>
                </div>

                <div class="inputwrapper animate2 bounceIn">
                    <?php echo CHtml::activePasswordField($model,'password',array('required'=>'required','placeholder'=>'Password')); ?>
                </div>
                
                <style>
                    .p12{width:20px !important;}
                    .custom
                </style>
                <div class="inputwrapper animate3 bounceIn">
                    <?php echo CHtml::activeCheckBox($model,'rememberMe',array('class'=>'p12')); ?>
                    <?php echo CHtml::activeLabelEx($model,'rememberMe',array('class'=>'custom-remember-me')); ?>
                </div>
                
                <div class="inputwrapper animate4 bounceIn">
                    <?php echo CHtml::submitButton(UserModule::t("Login"),array('class'=>'custom-login-btn')); ?>
                </div>
                
                <div class="inputwrapper animate5 bounceIn">
                    <p class="hint">
                    <?php echo CHtml::link(UserModule::t("Register"),Yii::app()->getModule('user')->registrationUrl); ?> | <?php echo CHtml::link(UserModule::t("Lost Password?"),Yii::app()->getModule('user')->recoveryUrl); ?>
                    </p>
                </div>
                
            <?php echo CHtml::endForm(); ?>
    </div><!--loginpanelinner-->
</div><!--loginpanel-->

    <?php
$form = new CForm(array(
    'elements'=>array(
        'username'=>array(
            'type'=>'text',
            'maxlength'=>32,
        ),
        'password'=>array(
            'type'=>'password',
            'maxlength'=>32,
        ),
        'rememberMe'=>array(
            'type'=>'checkbox',
        )
    ),

    'buttons'=>array(
        'login'=>array(
            'type'=>'submit',
            'label'=>'Login',
        ),
    ),
), $model);
?>