<?php
$this->breadcrumbs = array(
    'Tests' => array('index'),
    'Create',
);

?>
<div class="block">
    <div class="block-title">
        <h2><strong>Test</strong> Create</h2>
    </div>
    <?php echo $this->renderPartial('_form', array('model' => $model)); ?>
</div>