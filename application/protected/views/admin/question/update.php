<?php
Yii::app()->clientScript->registerScript('update', "
    function renderAnswer(el) {
        answer = $('#answers').attr('data-id');
        $.get('" . CController::createUrl('admin/answer/create') . "/id/' + answer +'/test_id/" . $model->test_id . "', function(data) {
            $(el).append(data);
            $('.select-chosen').chosen({
                width: '100%'
            });
        });
        $('#answers').attr('data-id', (parseInt(answer) + 1));
    }

    function deleteAnswer(el) {
        if(typeof $(el).attr('data-id') != 'undefined'){
            id = $(el).attr('data-id');
            $.post('" . CController::createUrl('admin/answer/delete') . "/id/' + id);
        }
        $(el).remove();
    }
", CClientScript::POS_END);
?>

<?php
$this->breadcrumbs = array(
    'Questions' => array('index'),
    $model->id => array('view', 'id' => $model->id),
    'Update',
);
?>
<div class="block">
    <div class="block-title">
        <h2><strong>Question</strong> Update # <?php echo$model->id ?></h2>
    </div>
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'question-form',
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
        <?php echo $form->label($model, 'description', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
        <div class="col-lg-5 col-sm-10 col-xs-12">
            <?php echo $form->textArea($model, 'description', array('placeholder' => 'Description', 'class' => 'form-control', 'cols' => 6)); ?>
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

    <div id="answers" data-id="<?php echo count($model->answers); ?>">
        <?php
        $i = 0;
        foreach ($model->answers as $answer) {
            $i++;
            ?>
            <div class="form-group answer-form" id="answer-form-<?php echo $i; ?>" data-id="<?php echo $answer->id; ?>">
                <label class="col-lg-2 col-sm-2 control-label"></label>
                <div class="col-lg-5 col-sm-10 col-xs-12">
                    <hr>
                    <span class="label label-info">Answer <?php echo $i; ?></span> 
                    <a class="btn btn-danger btn-xs" onclick="deleteAnswer('#answer-form-<?php echo $i; ?>')"><i class="fa fa-trash-o"></i></a>
                    <br><br>
                    <div class="row" style="margin-bottom: 15px;">
                        <div class="col-lg-12">
                            <?php echo CHtml::hiddenField('Question[answers][' . $i . '][id]', $answer->id); ?>
                            <?php echo CHtml::textArea('Question[answers][' . $i . '][description]', $answer->description, array('placeholder' => 'Answer ' . $i, 'class' => 'form-control', 'cols' => 6)); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <?php echo CHtml::textField('Question[answers][' . $i . '][value]', $answer->value, array('placeholder' => 'Value', 'class' => 'form-control')); ?>
                        </div>
                        <div class="col-lg-3">
                            <?php echo CHtml::dropDownList('Question[answers][' . $i . '][status]', $answer->status, Status::get_map(), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Status')); ?>
                        </div>
                        <div class="col-lg-6">
                            <?php echo CHtml::dropDownList('Question[answers][' . $i . '][variable_id]', $answer->variable_id, CHtml::listData($model->test->type->variables, 'id', 'name'), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Variable')); ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

    <div class="form-group">
        <label class="col-lg-2 col-sm-2 control-label"></label>
        <div class="col-lg-9 col-xs-12">
            <?php echo CHtml::htmlButton('<i class="fa fa-plus"></i> Add Question', array('class' => 'btn btn-primary', 'onclick' => 'renderAnswer("#answers")')); ?>
            <?php echo CHtml::htmlButton('<i class="fa fa-check"></i> ' . ($model->isNewRecord ? 'Create' : 'Save'), array('class' => 'btn btn-success', 'type' => 'submit')); ?>
            <?php echo CHtml::link('<i class="fa fa-arrow-left"></i> Back', array('admin/test/view', 'id' => $model->test_id), array('class' => 'btn btn-warning')); ?>
        </div>
    </div>

    <?php $this->endWidget(); ?>

</div>