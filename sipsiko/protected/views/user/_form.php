<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'user-form',
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'username'); ?>
        <?php echo $form->textField($model, 'username', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'username'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'email'); ?>
        <?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'email'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'password'); ?>
        <?php echo $form->passwordField($model, 'password', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'password'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'status'); ?>
        <?php echo $form->textField($model, 'status', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'status'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'last_login'); ?>
        <?php echo $form->textField($model, 'last_login'); ?>
        <?php echo $form->error($model, 'last_login'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'last_login_ip'); ?>
        <?php echo $form->textField($model, 'last_login_ip', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'last_login_ip'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'token'); ?>
        <?php echo $form->textField($model, 'token', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'token'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'parent_id'); ?>
        <?php echo $form->textField($model, 'parent_id'); ?>
        <?php echo $form->error($model, 'parent_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'created_at'); ?>
        <?php echo $form->textField($model, 'created_at'); ?>
        <?php echo $form->error($model, 'created_at'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'updated_at'); ?>
        <?php echo $form->textField($model, 'updated_at'); ?>
        <?php echo $form->error($model, 'updated_at'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->