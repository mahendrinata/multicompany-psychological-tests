<?php
$this->breadcrumbs = array(
    'Member Test' => array('member'),
    'Test',
);
?>
<div class="block">
    <div class="block-title">
        <h2><strong>Test</strong> <?php echo $model->test->name . ' (' . $model->company->first_name . ')'; ?></h2>
    </div>
    <div class="table-options clearfix">
        <h2 class="pull-right"><strong><?php echo (empty($model->spent_time)) ? 'Time Used' : 'Time Remaining'; ?> : <span id="time-remaining">Unlimited</span></strong></h2>
        <div class="clearfix"></div>
        <h4 class="pull-right">Total Question : <?php echo count($model->test->questions); ?></h4>
        <div class="clearfix"></div>
        <?php if (!empty($model->spent_time)) { ?>
            <h4 class="pull-right">Time to answer each question : <?php echo round(($model->spent_time * 60) / count($model->test->questions), 2); ?> seconds</h4>
            <div class="clearfix"></div>
        <?php } ?>
        <hr>
    </div>
    <?php echo CHtml::beginForm(Yii::app()->controller->createUrl('admin/usertest/test/id/' . $model->id), 'post', array('id' => 'user-test-form', 'class' => 'form-horizontal')); ?>
    <?php echo CHtml::hiddenField('UserTest[id]', $model->id, array('readonly' => 'readonly')); ?>
    
    <?php echo $this->renderPartial(Template::getTemplateFileName($model->test->type->template, 'tests/'), array('model' => $model, 'role' => RolePrivilege::MEMBER)); ?>
    
    <div class="table-options clearfix">
        <div class="btn-group btn-group-lg pull-right">
            <?php echo CHtml::htmlButton('<i class="fa fa-check"></i> Finish Test', array('class' => 'btn btn-success btn-lg', 'type' => 'submit')); ?>
        </div>
        <?php
        echo CHtml::htmlButton(
            '<i class="fa fa-check"></i><br>' . implode('<br>', explode(' ', 'F I N I S H')), array(
            'class' => 'btn btn-success btn-sm',
            'type' => 'submit',
            'style' => 'position:fixed;top:220px;right:0;'));

        $list = array();
        for ($i = 1; $i <= count($model->test->questions); $i++) {
            $list[$i] = $i;
        }
        ?>
    </div>
    <?php echo CHtml::endForm(); ?>
    <?php // echo CHtml::dropDownList('question_number', null, $list, array('class' => 'form-control', 'style' => 'position:fixed;top:370px;right:0;width:35px')); ?>
</div>

<?php
Yii::app()->clientScript->registerScript('duration_time', "
    $(document).ready(function() {
        $('#question_number').change(function() {
            $('#question-block-' + $(this).val()).focus();
        });
    });

    var startDate = new Date();
    var endDate = new Date(startDate.getTime() + " . (abs($model->spent_time) * 60 * 1000) . ");

    var timeCountDown = function() {
        var units = countdown.DEFAULTS;
        var ts = countdown(null, endDate, units);
        text = ts.toString();
        $('#time-remaining').text(text);

        setTimeout(timeCountDown, 1000);
    };

    timeCountDown();

    var setSpentTimeTest = function() {
        $.post('" . CController::createUrl('admin/usertest/setspenttime') . "', {
            user_test_id: " . $model->id . ",
            token: '" . $model->token . "'
        },
        function(data, status) {
            json = JSON.parse(data);
            if (parseInt(json.spentTime) <= 0) {
                $('#user-test-form').submit();
            }
        });

        setTimeout(setSpentTimeTest, 60000);
    };

    setTimeout(setSpentTimeTest, 60000);
", CClientScript::POS_END);
?>
