<div class="row">
    <?php
    $defaultAnswer = TestAnswer::model()->getDefaultAnswer($model->id);
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
                    $default = (isset($defaultAnswer[$question->id]) && !empty($defaultAnswer[$question->id])) ? $defaultAnswer[$question->id] : null;
                    foreach ($question->answers as $answer) {
                        ?>
                        <label class="radio">
                            <?php
                            echo CHtml::radioButton('UserTest[question][' . $question->id . ']', ($default == $answer->id) ? true : false, array(
                                'required' => 'required',
                                'data-user-test' => $model->id,
                                'data-question' => $question->id,
                                'data-answer' => $answer->id,
                                'data-token' => TestAnswer::model()->generateToken($model->token, $answer->id),
                                'value' => $answer->id,
                                'class' => 'answers'));
                            echo $answer->description;
                            ?>
                        </label>
                        <?php
                    }
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
                answer_choice: $(this).attr('data-answer'),
                token: $(this).attr('data-token')
            },
            function(data, status) {

            });
        });
    });
", CClientScript::POS_END);
?>
