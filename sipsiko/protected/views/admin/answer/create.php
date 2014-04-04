<div class="form-group answer-form" id="answer-form-<?php echo $id; ?>">
    <label class="col-lg-2 col-sm-2 control-label"></label>
    <div class="col-lg-5 col-sm-10 col-xs-12">
        <hr>
        <span class="label label-info">Answer <?php echo $id; ?></span> 
        <a class="btn btn-danger btn-xs" onclick="deleteAnswer('#answer-form-<?php echo $id; ?>')"><i class="fa fa-trash-o"></i></a>
        <br><br>
        <div class="row" style="margin-bottom: 15px;">
            <div class="col-lg-12">
                <?php echo CHtml::textArea('Question[answers][' . $id . '][description]', null, array('placeholder' => 'Answer ' . $id, 'class' => 'form-control', 'cols' => 6)); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <?php echo CHtml::textField('Question[answers][' . $id . '][value]', 1, array('placeholder' => 'Value', 'class' => 'form-control')); ?>
            </div>
            <div class="col-lg-3">
                <?php echo CHtml::dropDownList('Question[answers][' . $id . '][status]', Status::ACTIVE, Status::get_map(), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Status')); ?>
            </div>
            <div class="col-lg-6">
                <?php echo CHtml::dropDownList('Question[answers][' . $id . '][variable_id]', null, Type::model()->getTypeVariableList(), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Variable')); ?>
            </div>
        </div>
    </div>
</div>
