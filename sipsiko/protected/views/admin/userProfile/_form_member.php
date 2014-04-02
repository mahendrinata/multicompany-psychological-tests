
<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'user-profile-form',
    'enableAjaxValidation' => true,
    'htmlOptions' => array('class' => 'form-horizontal', 'enctype' => 'multipart/form-data',),
    ));
?>

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
    <?php echo $form->label($model, 'last_name', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <?php echo $form->textField($model, 'last_name', array('placeholder' => 'Last Name', 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'last_name', array('class' => 'help-block alert-danger')); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->label($model, 'last_name', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <?php echo $form->textField($model, 'last_name', array('placeholder' => 'Last Name', 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'last_name', array('class' => 'help-block alert-danger')); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->label($model, 'gender', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
    <div class="col-lg-2 col-sm-4 col-xs-12">
        <?php echo $form->dropDownList($model, 'gender', array(UserProfile::MALE, UserProfile::FEMALE), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Gender')); ?>
        <?php echo $form->error($model, 'gender', array('class' => 'help-block alert-danger')); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->label($model, 'birth_place', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <?php echo $form->textField($model, 'birth_place', array('placeholder' => 'Birth Place', 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'birth_place', array('class' => 'help-block alert-danger')); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->label($model, 'birth_date', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
    <div class="col-lg-1 col-sm-2 col-xs-12">
        <?php echo $form->textField($model, 'birth_date', array('placeholder' => 'Birth Date', 'class' => 'form-control input-datepicker')); ?>
        <?php echo $form->error($model, 'birth_date', array('class' => 'help-block alert-danger')); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->label($model, 'phone', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <?php echo $form->textField($model, 'phone', array('placeholder' => 'Phone', 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'phone', array('class' => 'help-block alert-danger')); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->label($model, 'photo', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <?php echo $form->fileField($model, 'photo', array('placeholder' => 'Photo')); ?>
        <?php echo $form->error($model, 'photo', array('class' => 'help-block alert-danger')); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->label($model, 'address', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
    <div class="col-lg-5 col-sm-10 col-xs-12">
        <?php echo $form->textArea($model, 'address', array('placeholder' => 'Description', 'class' => 'form-control input-datepicker', 'rows' => 6)); ?>
        <?php echo $form->error($model, 'address', array('class' => 'help-block alert-danger')); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->label($model, 'status', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
    <div class="col-lg-2 col-sm-4 col-xs-12">
        <?php echo $form->dropDownList($model, 'status', Status::get_map(), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Status')); ?>
        <?php echo $form->error($model, 'status', array('class' => 'help-block alert-danger')); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->label($model, 'user_id', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
    <div class="col-lg-2 col-sm-4 col-xs-12">
        <?php echo $form->dropDownList($model, 'user_id', CHtml::listData(User::model()->findAll(), 'id', 'username'), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Username')); ?>
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 col-sm-2 control-label"></label>
    <div class="col-lg-9 col-xs-12">
        <?php echo CHtml::htmlButton('<i class="fa fa-check"></i> ' . ($model->isNewRecord ? 'Create' : 'Save'), array('class' => 'btn btn-success', 'type' => 'submit')); ?>
        <?php echo CHtml::link('<i class="fa fa-arrow-left"></i> Back', array('admin/role'), array('class' => 'btn btn-warning')); ?>
    </div>
</div>

<?php $this->endWidget(); ?>