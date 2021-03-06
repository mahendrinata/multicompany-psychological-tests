<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'type-form',
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
    <?php echo $form->label($model, 'status_id', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
    <div class="col-lg-2 col-sm-5 col-xs-12">
        <?php echo $form->dropDownList($model, 'status_id', Status::model()->getListStatus(), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Status')); ?>
        <?php echo $form->error($model, 'status_id', array('class' => 'help-block alert-danger')); ?>
    </div>
</div>

<?php
if ($model->isNewRecord) {
    $experts = AccessWebUser::call()->getActiveExpertList();
    if (count($experts) > 1) {
        ?>
        <div class="form-group">
            <?php echo $form->label($model, 'expert_id', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
            <div class="col-lg-2 col-sm-5 col-xs-12">
                <?php echo $form->dropDownList($model, 'expert_id', $experts, array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Expert')); ?>
                <?php echo $form->error($model, 'expert_id', array('class' => 'help-block alert-danger')); ?>
            </div>
        </div>
        <?php
    } else {
        foreach ($experts as $key => $expert) {
            echo $form->hiddenField($model, 'expert_id', array('readonly' => 'readonly', 'value' => $key));
        }
    }
}
?>

<div class="form-group">
    <?php echo $form->label($model, 'template_test_id', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
    <div class="col-lg-2 col-sm-5 col-xs-12">
        <?php echo $form->dropDownList($model, 'template_test_id', Template::getListTemplate(), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Test Template')); ?>
        <?php echo $form->error($model, 'template_test_id', array('class' => 'help-block alert-danger')); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->label($model, 'conclusion_id', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
    <div class="col-lg-2 col-sm-5 col-xs-12">
        <?php echo $form->dropDownList($model, 'conclusion_id', Conclusion::getListConclusion(), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Conclusion')); ?>
        <?php echo $form->error($model, 'conclusion_id', array('class' => 'help-block alert-danger')); ?>
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 col-sm-2 control-label"></label>
    <div class="col-lg-9 col-xs-12">
        <?php echo CHtml::htmlButton('<i class="fa fa-check"></i> ' . ($model->isNewRecord ? 'Create' : 'Save'), array('class' => 'btn btn-success', 'type' => 'submit')); ?>
        <?php echo CHtml::link('<i class="fa fa-arrow-left"></i> Back', array('admin/type'), array('class' => 'btn btn-warning')); ?>
    </div>
</div>

<?php $this->endWidget(); ?>
