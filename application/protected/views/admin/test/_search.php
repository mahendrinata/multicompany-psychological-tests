<div class="wide form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
        'htmlOptions' => array('class' => 'form-horizontal'),
        'enableAjaxValidation' => true
    ));
    ?>

    <div class="form-group">
        <?php echo $form->label($model, 'id', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
        <div class="col-lg-1 col-sm-2 col-xs-12">
            <?php echo $form->textField($model, 'id', array('placeholder' => 'Id', 'class' => 'form-control')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->label($model, 'slug', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <?php echo $form->textField($model, 'slug', array('placeholder' => 'Slug', 'class' => 'form-control')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->label($model, 'name', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <?php echo $form->textField($model, 'name', array('placeholder' => 'Name', 'class' => 'form-control')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->label($model, 'description', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
        <div class="col-lg-5 col-sm-10 col-xs-12">
            <?php echo $form->textArea($model, 'description', array('placeholder' => 'Description', 'class' => 'form-control input-datepicker', 'rows' => 6)); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->label($model, 'start_date', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
        <div class="col-lg-1 col-sm-2 col-xs-12">
            <?php echo $form->textField($model, 'start_date', array('placeholder' => 'Start Date', 'class' => 'form-control input-datepicker')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->label($model, 'end_date', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
        <div class="col-lg-1 col-sm-2 col-xs-12">
            <?php echo $form->textField($model, 'end_date', array('placeholder' => 'End Date', 'class' => 'form-control input-datepicker')); ?>
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
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->label($model, 'type_id', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
        <div class="col-lg-2 col-sm-4 col-xs-12">
            <?php echo $form->dropDownList($model, 'type_id', CHtml::listData(Type::model()->findAll(), 'id', 'name'), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Type')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->label($model, 'created_at', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
        <div class="col-lg-1 col-sm-2 col-xs-12">
            <?php echo $form->textField($model, 'created_at', array('placeholder' => 'Created At', 'class' => 'form-control input-datepicker')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->label($model, 'updated_at', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
        <div class="col-lg-1 col-sm-2 col-xs-12">
            <?php echo $form->textField($model, 'updated_at', array('placeholder' => 'Updated At', 'class' => 'form-control input-datepicker')); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-lg-2 col-sm-2 control-label"></label>
        <div class="col-lg-9 col-xs-12">
            <?php echo CHtml::htmlButton('<i class="fa fa-search"></i> Search', array('class' => 'btn btn-success', 'type' => 'submit')); ?>
        </div>
    </div>

    <?php $this->endWidget(); ?>

</div>