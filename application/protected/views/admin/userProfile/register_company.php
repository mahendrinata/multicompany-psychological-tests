<?php
$this->breadcrumbs = array(
    'Register Company',
);
?>
<div class="block">
    <div class="block-title">
        <h2><strong>Company</strong> Register</h2>
    </div>
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'user-profile-form',
        'enableAjaxValidation' => true,
        'htmlOptions' => array('class' => 'form-horizontal', 'enctype' => 'multipart/form-data',),
    ));
    ?>
    <div class="step">
        <div class="wizard-steps">
            <div class="row">
                <div class="col-xs-3">
                    <span>1. Profile</span>
                </div>
                <div class="col-xs-3">
                    <span>2. Expert</span>
                </div>
                <div class="col-xs-3 active">
                    <span>3. Company</span>
                </div>
                <div class="col-xs-3">
                    <span>4. Member</span>
                </div>
            </div>
        </div>
        <div class="alert alert-info alert-dismissable">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            <h4><i class="fa fa-info-circle"></i> Info</h4>
            Fields with <span class="required">*</span> are <a class="alert-link" href="javascript:void(0)">required</a>.
        </div>

        <?php // echo $form->errorSummary($model); ?>

        <div class="form-group">
            <?php echo $form->label($model, 'first_name', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <?php echo $form->textField($model, 'first_name', array('placeholder' => 'First Name', 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'first_name', array('class' => 'help-block alert-danger')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->label($model, 'phone', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <?php echo $form->textField($model, 'phone', array('placeholder' => 'Phone', 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'phone', array('class' => 'help-block alert-danger')); ?>
            </div>
        </div>

        <!--        <div class="form-group">
        <?php echo $form->label($model, 'photo', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
                    <div class="col-lg-3 col-sm-6 col-xs-12">
        <?php echo $form->fileField($model, 'photo'); ?>
        <?php echo $form->error($model, 'photo', array('class' => 'help-block alert-danger')); ?>
                    </div>
                </div>-->

        <div class="form-group">
            <?php echo $form->label($model, 'address', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
            <div class="col-lg-5 col-sm-10 col-xs-12">
                <?php echo $form->textArea($model, 'address', array('placeholder' => 'Description', 'class' => 'form-control', 'rows' => 6)); ?>
                <?php echo $form->error($model, 'address', array('class' => 'help-block alert-danger')); ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 col-sm-2 control-label"></label>
            <div class="col-lg-9 col-xs-12">
                <?php echo CHtml::htmlButton('<i class="fa fa-check"></i> Next', array('class' => 'btn btn-success', 'type' => 'submit')); ?>
            </div>
        </div>

    </div>
    <?php $this->endWidget(); ?>
</div>
