<?php
$this->breadcrumbs = array(
    'Test of Company' => array('index'),
    'Create',
);
?>
<div class="block">
    <div class="block-title">
        <h2><strong>User Test of Company</strong> Create</h2>
    </div>
    <?php echo $this->renderPartial('_form', array('model' => $model)); ?>
</div>