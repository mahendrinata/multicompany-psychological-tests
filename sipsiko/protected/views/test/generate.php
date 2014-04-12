<div class="container-fluid" id="wrapper-header">
    <div id="content" class="container clearfix">
        <nav id="page-title" >
            <h1 style="margin-bottom: 20px"><strong>Test</strong> <?php echo $model->name . ' (' . $model->user_profile->first_name . ')'; ?></h1>
        </nav>
    </div>
</div>

<div id="body-wrapper" style="background-color: #FFF">
    <div id="content" class="container clearfix" style="min-height: 600px;padding-top: 20px">
        <?php echo CHtml::beginForm(Yii::app()->controller->createUrl('test/result'), 'post', array('id' => 'user-test-form', 'class' => 'form-horizontal')); ?>
        <?php echo CHtml::hiddenField('UserTest[id]', $model->id, array('readonly' => 'readonly')); ?>
        <?php
        $i = 1;
        foreach ($model->questions as $question) {
            ?>
            <div class="one-half <?php echo ($i % 2 == 0) ? 'last' : '' ?>">
                <p>
                    <span><?php echo $i; ?></span>
                    <?php echo $question->description; ?>
                </p>
                <?php
                $defaultModel = TestAnswer::model()->findByAttributes(array(
                    'user_test_id' => $model->id,
                    'question_id' => $question->id
                ));
                $default = (empty($defaultModel) ? null : $defaultModel->answer_id);
                echo CHtml::radiobuttonList(
                    'UserTest[question][' . $question->id . ']', $default, CHtml::listData($question->answers, 'id', 'description'), array('required' => 'required'));
                ?>
            </div>
            <?php
            if ($i % 2 == 0) {
                echo '<hr class="h50">';
                echo '<div class="clearfix"></div>';
            }
            $i++;
        }
        ?>
        <?php echo CHtml::htmlButton('<i class="fa fa-check"></i> SELESAI', array('class' => 'btn', 'type' => 'submit', 'style' => 'line-height:10px;margin-bottom:20px')); ?>
        <?php
        echo CHtml::htmlButton(
            implode('<br>', explode(' ', 'S E L E S A I')), array(
            'class' => 'btn btn-success btn-sm',
            'type' => 'submit',
            'style' => 'position:fixed;top:220px;right:-20px;'));
        ?>
        <?php echo CHtml::endForm(); ?>
    </div>
</div>
