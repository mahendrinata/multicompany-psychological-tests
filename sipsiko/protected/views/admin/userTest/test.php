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
    <?php echo CHtml::beginForm(Yii::app()->controller->createUrl('admin/usertest/test/id/' . $model->id), 'post', array('class' => 'form-horizontal')); ?>
    <?php echo CHtml::hiddenField('UserTest[id]', $model->id, array('readonly' => 'readonly')); ?>
    <div class="row">
        <?php
        $i = 1;
        foreach ($model->test->questions as $question) {
            ?>
            <div class="col-lg-4 col-sm-6 col-xs-12">
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
                            'UserTest[question][' . $question->id . ']', $default, CHtml::listData($question->answers, 'id', 'description'), 
                            array('required' => 'required',
                                'data-user-test' => $model->id,
                                'data-question' => $question->id));
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
    </div>
    <?php echo CHtml::endForm(); ?>
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
    });
</script>