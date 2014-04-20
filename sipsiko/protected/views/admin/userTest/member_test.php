<?php
$this->breadcrumbs = array(
    'User Tests' => array('index'),
    'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-form form').submit(function(){
	$('#user-test-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
//$('#export-excel-member-test').click(function(){
//    data = $('.filters').serialize();
//    console.log(data);
//})
");
?>

<div class="block">
    <div class="block-title">
        <h2><strong>User Tests</strong> Management</h2>
    </div>
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'user-test-form',
        'enableAjaxValidation' => true,
        'htmlOptions' => array('class' => 'form-inline'),
    ));
    ?>

    <div class="form-group">
        <?php echo $form->label($model, 'user_profile_id', array('class' => 'sr-only col-lg-5')); ?>
        <?php echo $form->dropDownList($model, 'user_profile_id', CHtml::listData(UserProfile::model()->getActiveUserProfilesByRole(RolePrivilege::MEMBER), 'id', 'first_name'), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Member Test')); ?>
        <?php echo $form->error($model, 'user_profile_id', array('class' => 'help-block alert-danger')); ?>
    </div>
    <div class="form-group">
        <?php echo $form->label($model, 'spent_time', array('class' => 'sr-only')); ?>
        <?php echo $form->textField($model, 'spent_time', array('placeholder' => 'Spent Time', 'class' => 'form-control text-right')); ?>
        <?php echo $form->error($model, 'spent_time', array('class' => 'help-block alert-danger')); ?>
    </div>
    <div class="form-group">
        <?php echo $form->label($model, 'show_result', array('class' => 'sr-only col-lg-1')); ?>
        <?php echo $form->dropDownList($model, 'show_result', array(1 => 'Yes', 0 => 'No'), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Show Result')); ?>
        <?php echo $form->error($model, 'show_result', array('class' => 'help-block alert-danger')); ?>
    </div>
    <div class="form-group">
        <?php echo $form->label($model, 'start_date', array('class' => 'sr-only')); ?>
        <?php echo $form->textField($model, 'start_date', array('placeholder' => 'Start Date', 'class' => 'form-control input-datepicker')); ?>
        <?php echo $form->error($model, 'start_date', array('class' => 'help-block alert-danger')); ?>
    </div>
    <div class="form-group">
        <?php echo $form->label($model, 'end_date', array('class' => 'sr-only')); ?>
        <?php echo $form->textField($model, 'end_date', array('placeholder' => 'End Date', 'class' => 'form-control input-datepicker')); ?>
        <?php echo $form->error($model, 'end_date', array('class' => 'help-block alert-danger')); ?>
    </div>
    <div class="form-group">
        <?php echo $form->label($model, 'status', array('class' => 'sr-only col-lg-3')); ?>
        <?php echo $form->dropDownList($model, 'status', Status::get_map(), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Status')); ?>
        <?php echo $form->error($model, 'status', array('class' => 'help-block alert-danger')); ?>
    </div>
    <div class="form-group">
        <?php echo CHtml::htmlButton('<i class="fa fa-check"></i> Create', array('class' => 'btn btn-success', 'type' => 'submit')); ?>
    </div>
    <?php $this->endWidget(); ?>

    <div class="table-options clearfix">
        <div class="btn-group btn-group-sm pull-right">
            <?php echo CHtml::link('<i class="fa fa-download"></i> Export Excel', array('admin/usertest/membertestexcelreport', 'id' => $testModel->id), array('class' => 'btn btn-success')) ?>
        </div>
    </div>
    <div class="table-responsive">
        <?php
        $this->widget('zii.widgets.grid.CGridView', array(
            'itemsCssClass' => 'table table-bordered table-striped table-vcenter',
            'rowCssClass' => array(),
            'id' => 'user-test-grid',
            'dataProvider' => $userTestModel->search(),
            'filter' => $userTestModel,
            'ajaxUpdate' => true,
            'afterAjaxUpdate' => 'function(id, data){$(".select-chosen").chosen({width: "100%",allow_single_deselect: true});$(".input-datepicker").datepicker({format: "yyyy-mm-dd"});}',
            'pager' => array(
                'firstPageLabel' => '<<',
                'prevPageLabel' => '<',
                'nextPageLabel' => '>',
                'lastPageLabel' => '>>',
                'htmlOptions' => array('class' => 'yiiPager pagination pagination-sm remove-margin'),
                'header' => ' ',
                'cssFile' => '',
                'selectedPageCssClass' => 'active',
            ),
            'pagerCssClass' => 'pagination',
            'summaryCssClass' => 'alert alert-info',
            'columns' => array(
                array(
                    'name' => 'id',
                    'header' => 'ID',
                    'filterHtmlOptions' => array('style' => 'max-width: 50px;', 'class' => 'text-right'),
                    'htmlOptions' => array('style' => 'max-width: 50px;', 'class' => 'text-right'),
                    'filter' => CHtml::activeTelField($userTestModel, 'id', array('id' => false, 'class' => 'form-control text-right'))
                ),
                array(
                    'name' => 'user_profile.first_name',
                    'value' => '$data->user_profile->first_name',
                    'header' => 'Member Name',
                    'filter' => ''
                ),
                array(
                    'name' => 'test_id',
                    'value' => '$data->test->name',
                    'filter' => ''
                ),
                array(
                    'name' => 'spent_time',
                    'filter' => CHtml::activeTelField($userTestModel, 'spent_time', array('id' => false, 'class' => 'form-control text-right')),
                    'htmlOptions' => array('class' => 'text-right'),
                ),
                array(
                    'name' => 'time_used',
                    'filter' => CHtml::activeTelField($userTestModel, 'time_used', array('id' => false, 'class' => 'form-control text-right')),
                    'htmlOptions' => array('class' => 'text-right'),
                ),
                array(
                    'name' => 'start_date',
                    'filter' => CHtml::activeTelField($userTestModel, 'start_date', array('id' => false, 'class' => 'form-control input-datepicker'))
                ),
                array(
                    'name' => 'end_date',
                    'filter' => CHtml::activeTelField($userTestModel, 'end_date', array('id' => false, 'class' => 'form-control input-datepicker'))
                ),
                array(
                    'name' => 'test_variable.variable',
                    'type' => 'raw',
                    'value' => 'ModelHelper::getListTestVariable($data->test_variables,true)',
                ),
                array(
                    'name' => 'status',
                    'type' => 'raw',
                    'value' => 'Status::get_tag_label($data->status)',
                    'htmlOptions' => array('class' => 'text-center'),
                    'filter' => CHtml::activeDropDownList($userTestModel, 'status', Status::get_map(), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Status')),
                ),
                array(
                    'name' => 'show_result',
                    'filter' => CHtml::activeDropDownList($userTestModel, 'show_result', array(1 => 'Yes', 0 => 'No'), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Show Result')),
                    'type' => 'raw',
                    'value' => 'ModelHelper::getBooleanLabel($data->show_result)',
                    'htmlOptions' => array('class' => 'text-center'),
                ),
                array(
                    'class' => 'CButtonColumn',
                    'htmlOptions' => array('style' => 'width: 80px;')
                )
        )));
        ?>      
    </div>
</div>
