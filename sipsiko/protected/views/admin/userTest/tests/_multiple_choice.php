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
    });
", CClientScript::POS_END);
?>
