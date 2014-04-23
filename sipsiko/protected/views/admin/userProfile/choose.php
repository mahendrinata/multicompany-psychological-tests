<?php
$this->breadcrumbs = array(
    'Choose Profile',
);
?>
<div class="block">
    <div class="block-title">
        <h2><strong>Choose</strong> User Profile</h2>
    </div>
    <?php
    echo CHtml::beginForm(Yii::app()->controller->createUrl('admin/userprofile/choose'), 'post', array('class' => 'form-horizontal'));
    ?>
    <div class="step">
        <div class="wizard-steps">
            <div class="row">
                <div class="col-xs-3 active">
                    <span>1. Profile</span>
                </div>
                <div class="col-xs-3">
                    <span>2. Expert</span>
                </div>
                <div class="col-xs-3">
                    <span>3. Company</span>
                </div>
                <div class="col-xs-3">
                    <span>4. Member</span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <?php echo CHtml::label('User Profile', '', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
            <div class="col-lg-1 col-sm-2 col-xs-12">
                <?php echo CHtml::checkBoxList('UserProfile[roles]', null, RolePrivilege::get_user_profiles_role()); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-2 col-sm-2 control-label"></label>
            <div class="col-lg-1 col-sm-2 col-xs-12">
                <?php echo CHtml::htmlButton('<i class="fa fa-check"></i> Next', array('class' => "btn btn-success", 'type' => 'submit')); ?>
            </div>
        </div>
    </div>
    <?php echo CHtml::endForm(); ?>
</div>
