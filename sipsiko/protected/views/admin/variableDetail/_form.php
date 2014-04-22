<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'variable-detail-form',
    'enableAjaxValidation' => true,
    'htmlOptions' => array('class' => 'form-horizontal'),
    ));


Yii::app()->clientScript->registerScript('search', "
    $(document).ready(function() {
        $('#combination').change(function() {
            val = $(this).val();
            join = '';
            if(val != null) {
                join = val.join('-');
            }
            $('#slug').val(join);
        });
    });
");
?>

<div class="alert alert-info alert-dismissable">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    <h4><i class="fa fa-info-circle"></i> Info</h4>
    Fields with <span class="required">*</span> are <a class="alert-link" href="javascript:void(0)">required</a>.
</div>

<?php // echo $form->errorSummary($model);  ?>

<div class="form-group">
    <?php echo $form->label($model, 'combinations', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
    <div class="col-lg-5 col-sm-10 col-xs-12">
        <?php echo $form->dropDownList($model, 'combinations', Type::model()->getTypeVariableList(), array('id' => 'combination', 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Variable', 'multiple' => 'multiple')); ?>
        <?php echo $form->error($model, 'combinations', array('class' => 'help-block alert-danger')); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->label($model, 'slug', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <?php echo $form->textField($model, 'slug', array('id' => 'slug', 'placeholder' => 'Slug', 'class' => 'form-control disable', 'readonly' => 'readonly')); ?>
        <?php echo $form->error($model, 'slug', array('class' => 'help-block alert-danger')); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->label($model, 'name', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
    <div class="col-lg-4 col-sm-8 col-xs-12">
        <?php echo $form->textField($model, 'name', array('id' => 'name', 'placeholder' => 'Name', 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'name', array('class' => 'help-block alert-danger')); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->label($model, 'description', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
    <div class="col-lg-8 col-sm-12 col-xs-12">
        <?php echo $form->textArea($model, 'description', array('placeholder' => 'Description', 'class' => 'form-control textarea-editor', 'rows' => 20)); ?>
        <?php echo $form->error($model, 'description', array('class' => 'help-block alert-danger')); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->label($model, 'status', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
    <div class="col-lg-2 col-sm-5 col-xs-12">
        <?php echo $form->dropDownList($model, 'status', Status::get_map(), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Status')); ?>
        <?php echo $form->error($model, 'status', array('class' => 'help-block alert-danger')); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->label($model, 'tag_variables', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
    <div class="col-lg-5 col-sm-10 col-xs-12">
        <?php echo $form->dropDownList($model, 'tag_variables', Tag::model()->getTagList(), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Tag', 'multiple' => 'multiple')); ?>
        <?php echo $form->error($model, 'tag_variables', array('class' => 'help-block alert-danger')); ?>
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 col-sm-2 control-label"></label>
    <div class="col-lg-9 col-xs-12">
        <?php echo CHtml::htmlButton('<i class="fa fa-check"></i> ' . ($model->isNewRecord ? 'Create' : 'Save'), array('class' => 'btn btn-success', 'type' => 'submit')); ?>
        <?php echo CHtml::link('<i class="fa fa-arrow-left"></i> Back', array('admin/variabledetail'), array('class' => 'btn btn-warning')); ?>
    </div>
</div>

<?php $this->endWidget(); ?>
