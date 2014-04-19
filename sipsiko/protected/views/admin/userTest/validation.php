<?php
$this->breadcrumbs = array(
    'Expert Validation Test' => array('admin/test/index'),
    'Test',
);
?>
<div class="block">
    <div class="block-title">
        <h2><strong>Validation Test</strong> <?php echo $model->test->name; ?></h2>
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
    <?php echo CHtml::beginForm(Yii::app()->controller->createUrl('admin/usertest/validation/id/' . $model->id), 'post', array('id' => 'user-test-form', 'class' => 'form-horizontal')); ?>
    <?php echo CHtml::hiddenField('UserTest[id]', $model->id, array('readonly' => 'readonly')); ?>
    <div class="row">
        <?php
        $i = 1;
        foreach ($model->test->questions as $question) {
            ?>
            <div class="col-lg-4 col-sm-6 col-xs-12" id="question-block-<?php echo $i; ?>">
                <div class= "block">
                    <p>
                        <label class="radio">
                            <span class="number-question"><?php echo $i; ?></span>
                            <?php echo $question->description; ?>
                        </label>
                        <?php
                        $defaultModel = TestAnswer::model()->findByAttributes(array(
                            'user_test_id' => $model->id,
                            'question_id' => $question->id
                        ));
                        $default = (empty($defaultModel) ? null : $defaultModel->answer_id);
                        echo CHtml::radiobuttonList(
                            'UserTest[question][' . $question->id . ']', $default, CHtml::listData($question->answers, 'id', 'description'), array('required' => 'required',
                            'data-user-test' => $model->id,
                            'data-question' => $question->id,
                            'class' => 'answers'));
                        ?>
                    </p>
                </div>
            </div>
            <?php
            if ($i % 2 == 0 && $i != 0)
                echo '<div class="clearfix clearfix-display clearfix-sm"></div>';

            if ($i % 3 == 0 && $i != 0)
                echo '<div class="clearfix clearfix-display clearfix-lg"></div>';
            $i++;
        }
        ?>
    </div>
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
Yii::app()->clientScript->registerScript('test', "
    $(document).ready(function() {
        $('.answers').change(function() {
            $.post('" . CController::createUrl('admin/usertest/savevalidationanswer') . "', {
                user_test_id: $(this).attr('data-user-test'),
                question_id: $(this).attr('data-question'),
                answer_id: $(this).val(),
                token: '" . $model->token . "'
            },
            function(data, status) {

            });
        });

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
        $.post('" . CController::createUrl('admin/usertest/setvalidationspenttime') . "', {
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