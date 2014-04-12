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
        <?php echo $form->label($model, 'user_profile_id', array('class' => 'sr-only')); ?>
        <?php echo $form->dropDownList($model, 'user_profile_id', CHtml::listData(UserProfile::model()->getActiveUserProfilesByRole(RolePrivilege::MEMBER), 'id', 'first_name'), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Member Test')); ?>
        <?php echo $form->error($model, 'user_profile_id', array('class' => 'help-block alert-danger')); ?>
    </div>
    <div class="form-group">
        <?php echo $form->label($model, 'spent_time', array('class' => 'sr-only')); ?>
        <?php echo $form->textField($model, 'spent_time', array('placeholder' => 'Spent Time', 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'spent_time', array('class' => 'help-block alert-danger')); ?>
    </div>
    <div class="form-group">
        <?php echo $form->label($model, 'status', array('class' => 'sr-only')); ?>
        <?php echo $form->dropDownList($model, 'status', Status::get_map(), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Status')); ?>
        <?php echo $form->error($model, 'status', array('class' => 'help-block alert-danger')); ?>
    </div>
    <div class="form-group">
        <?php echo CHtml::htmlButton('<i class="fa fa-check"></i> Create', array('class' => 'btn btn-success', 'type' => 'submit')); ?>
    </div>
    <?php $this->endWidget(); ?>

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
                    'filter' => CHtml :: activeTelField($userTestModel, 'id', array('id' => false, 'class' => 'form-control text-right'))
                ),
                array(
                    'name' => 'user_profile.first_name',
                    'value' => '$data->user_profile->first_name', 'header' => 'Member Name'
                ),
                array(
                    'name' => 'test_id',
                    'filter' => CHtml:: activeDropDownList($userTestModel, 'test_id', CHtml::listData(Test::model()->getTestCompany($this->profiles[RolePrivilege::COMPANY]), 'id', 'name'), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Type Test')),
                    'value' => '$data->test->name'
                ),
                array(
                    'name' => 'spent_time',
                    'filter' => CHtml :: activeTelField($userTestModel, 'spent_time', array('id' => false, 'class' => 'form-control text-right')),
                    'htmlOptions' => array('class' => 'text-right'),
                ), 
                array(
                    'name' => 'test.start_date',
                    'value' => '$data->test->start_date', 'filter' => ''
                ),
                array(
                    'name' => 'test.end_date',
                    'value' => '$data->test->end_date',
                    'filter' => ''
                ),
                array(
                    'name' => 'time_used',
                    'filter' => CHtml :: activeTelField($userTestModel, 'time_used', array('id' => false, 'class' => 'form-control text-right')),
                    'htmlOptions' => array('class' => 'text-right'),
                ), 
                array(
                    'name' => 'status',
                    'filter' => CHtml:: activeDropDownList($userTestModel, 'status', Status::get_map(), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Status')),
                    'type' => 'raw',
                    'value' => 'Status::get_tag_label($data->status)',
                    'htmlOptions' => array('class' => 'text-center'),
                ), array(
                    'class' => 'CButtonColumn',
                    'filterHtmlOptions' => array('style' => 'width: 80px;')
                )
        )));
        ?>      
    </div>
</div>
