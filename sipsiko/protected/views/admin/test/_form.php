<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'test-form',
    'enableAjaxValidation' => true,
    'htmlOptions' => array('class' => 'form-horizontal'),
    ));
?>

<div class="alert alert-info alert-dismissable">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    <h4><i class="fa fa-info-circle"></i> Info</h4>
    Fields with <span class="required">*</span> are <a class="alert-link" href="javascript:void(0)">required</a>.
</div>

<?php // echo $form->errorSummary($model); ?>

<div class="form-group">
    <?php echo $form->label($model, 'slug', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="input-group">
            <?php echo $form->textField($model, 'slug', array('placeholder' => 'Slug', 'class' => 'form-control slugify', 'readonly' => 'readonly')); ?>
            <span class="input-group-btn">
                <button class="btn btn-warning" type="button" onClick="removeReadOnly('.slugify')"><i class="fa fa-edit"></i></button>
            </span>
        </div>
        <?php echo $form->error($model, 'slug', array('class' => 'help-block alert-danger')); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->label($model, 'name', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <?php echo $form->textField($model, 'name', array('placeholder' => 'Name', 'class' => 'form-control', 'onKeyUp' => 'slugify(this, ".slugify")')); ?>
        <?php echo $form->error($model, 'name', array('class' => 'help-block alert-danger')); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->label($model, 'description', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
    <div class="col-lg-5 col-sm-10 col-xs-12">
        <?php echo $form->textArea($model, 'description', array('placeholder' => 'Description', 'class' => 'form-control', 'cols' => 6)); ?>
        <?php echo $form->error($model, 'description', array('class' => 'help-block alert-danger')); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->label($model, 'start_date', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
    <div class="col-lg-1 col-sm-2 col-xs-12">
        <?php echo $form->textField($model, 'start_date', array('placeholder' => 'Start Date', 'class' => 'form-control input-datepicker')); ?>
        <?php echo $form->error($model, 'start_date', array('class' => 'help-block alert-danger')); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->label($model, 'end_date', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
    <div class="col-lg-1 col-sm-2 col-xs-12">
        <?php echo $form->textField($model, 'end_date', array('placeholder' => 'End Date', 'class' => 'form-control input-datepicker')); ?>
        <?php echo $form->error($model, 'end_date', array('class' => 'help-block alert-danger')); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->label($model, 'status', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
    <div class="col-lg-2 col-sm-4 col-xs-12">
        <?php echo $form->dropDownList($model, 'status', Status::get_map(), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Status')); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->label($model, 'is_public', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
    <div class="col-lg-1 col-sm-2 col-xs-12">
        <?php echo $form->radioButtonList($model, 'is_public', Test::model()->getPublicationStatus()); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->label($model, 'combination_variable', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
    <div class="col-lg-2 col-sm-4 col-xs-12">
        <?php echo $form->textField($model, 'combination_variable', array('placeholder' => 'Combianation Variable', 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'combination_variable', array('class' => 'help-block alert-danger')); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->label($model, 'type_id', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
    <div class="col-lg-2 col-sm-4 col-xs-12">
        <?php echo $form->dropDownList($model, 'type_id', CHtml::listData(Type::model()->findAll(), 'id', 'name'), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Type')); ?>
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
