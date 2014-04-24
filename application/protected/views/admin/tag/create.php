<?php
$this->breadcrumbs = array(
    'Tags' => array('index'),
    'Create',
);
?>
<div class="block">
    <div class="block-title">
        <h2><strong>Tag</strong> Create</h2>
    </div>
    <?php echo $this->renderPartial('_form', array('model' => $model)); ?>
</div>