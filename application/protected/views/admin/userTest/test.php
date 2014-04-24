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
    <?php echo CHtml::beginForm(Yii::app()->controller->createUrl('admin/usertest/test/id/' . $model->id), 'post', array('id' => 'user-test-form', 'class' => 'form-horizontal')); ?>
    <div id="test-description" class="table-options clearfix">
        <h2 class="pull-right"><strong><?php echo (empty($model->spent_time)) ? 'Time Used' : 'Time Remaining'; ?> : <span id="time-remaining">Unlimited</span></strong></h2>
        <div class="clearfix"></div>
        <?php if (!empty($model->spent_time)) { ?>
            <h4 class="pull-right">Time used : <span id="time-used"><?php echo $model->time_used ?></span> minutes</h4>
            <div class="clearfix"></div>
        <?php } ?>
        <h4 class="pull-right">Total Question : <?php echo count($model->test->questions); ?></h4>
        <div class="clearfix"></div>
        <?php if (!empty($model->spent_time)) { ?>
            <h4 class="pull-right">Time to answer each question : <?php echo round(($model->spent_time * 60) / count($model->test->questions), 2); ?> seconds</h4>
            <div class="clearfix"></div>
        <?php } ?>
        <div class="btn-group pull-right">
            <?php echo CHtml::htmlButton('<i class="fa fa-check"></i> Finish', array('class' => 'btn btn-success', 'type' => 'submit')); ?>
        </div>
    </div>
    <div class="clearfix" style="margin-top: 20px"></div>
    <?php echo CHtml::hiddenField('UserTest[id]', $model->id, array('readonly' => 'readonly')); ?>

    <?php echo $this->renderPartial(Template::getTemplateFileName($model->test->type->template, 'tests/'), array('model' => $model, 'role' => RolePrivilege::MEMBER)); ?>

    <?php echo CHtml::endForm(); ?>
</div>

<?php
if (empty($model->spent_time)) {
    $time = (empty($model->time_used)) ? 0 : ($model->time_used * -1);
} else {
    $time = $model->spent_time;
}

Yii::app()->clientScript->registerScript('duration_time', "
    var startDate = new Date();
    var endDate = new Date(startDate.getTime() + " . ($time * 60 * 1000) . ");

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
            $('#time-used').text(json.timeUsed);
            if (parseInt(json.spentTime) <= 0) {
                $('#user-test-form').submit();
            }
        });

        setTimeout(setSpentTimeTest, 60000);
    };

    setTimeout(setSpentTimeTest, 60000);
", CClientScript::POS_END);
?>
