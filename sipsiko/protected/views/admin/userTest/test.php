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
    <div class="row">
        <?php
        $i = 1;
        foreach ($model->test->questions as $question) {
            ?>
            <div class = "col-lg-4 col-sm-6 col-xs-12">
                <div class = "block">
                    <p>
                        <?php
                        echo $i . '. ' . $question->description.'<br>';
                        echo CHtml::radioButtonList('Test[questions][' . $question->id . ']', null, CHtml::listData($question->answers, 'id', 'description'));
                        ?>
                    </p>
                </div>
            </div>
            <?php
            if ($i % 3 == 0 && $i != 0) {
                echo '<div class="clearfix"></div><hr>';
            }
            $i++;
        }
        ?>
    </div>
</div>