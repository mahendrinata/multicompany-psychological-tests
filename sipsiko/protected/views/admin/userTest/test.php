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
        <h2 class="pull-right"><strong>Time Remaining : <span id="time-remaining">Unlimited</span></strong></h2>
        <div class="clearfix"></div>
        <h4 class="pull-right">Total Question : <?php echo count($model->test->questions); ?></h4>
        <div class="clearfix"></div>
        <?php if (!empty($model->spent_time)) { ?>
            <h4 class="pull-right">Time to answer the each question : <?php echo round(($model->spent_time * 60) / count($model->test->questions), 2); ?> seconds</h4>
            <div class="clearfix"></div>
        <?php } ?>
        <hr>
    </div>
    <?php echo CHtml::beginForm(Yii::app()->controller->createUrl('admin/usertest/test/id/' . $model->id), 'post', array('id' => 'user-test-form', 'class' => 'form-horizontal')); ?>
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

<script type="text/javascript">
    $(document).ready(function() {
        $('.answers').change(function() {
            $.post("<?php echo CController::createUrl('admin/usertest/savetestanswer') ?>", {
                user_test_id: $(this).attr('data-user-test'),
                question_id: $(this).attr('data-question'),
                answer_id: $(this).val()
            },
            function(data, status) {

            });
        });

        $('#question_number').change(function() {
            $('#question-block-' + $(this).val()).focus();
        });
    });

<?php if (!empty($model->spent_time)) { ?>
        var startDate = new Date();
        var endDate = new Date(startDate.getTime() + (<?php echo $model->spent_time; ?> * 60 * 1000));

        var timeCountDown = function() {
            var units = countdown.DEFAULTS;
            var ts = countdown(null, endDate, units);
            text = ts.toString();
            $('#time-remaining').text(text);

            setTimeout(timeCountDown, 1000);
        };

        var setSpentTimeTest = function() {
            $.post("<?php echo CController::createUrl('admin/usertest/setspenttime') ?>", {
                user_test_id: <?php echo $model->id; ?>
            },
            function(data, status) {
                json = JSON.parse(data);
                if (parseInt(json.spentTime) <= 0) {
                    $('#user-test-form').submit();
                }
            });

            setTimeout(setSpentTimeTest, 60000);
        };

        timeCountDown();
        setTimeout(setSpentTimeTest, 60000);
<?php } else { ?>
        var setTimeUsedTest = function() {
            $.post("<?php echo CController::createUrl('admin/usertest/settimeused') ?>", {
                user_test_id: <?php echo $model->id; ?>
            });

            setTimeout(setTimeUsedTest, 60000);
        };
        setTimeout(setTimeUsedTest, 60000);
<?php } ?>
</script>