<?php
$this->breadcrumbs = array(
    'Variable Details' => array('index'),
    'Create',
);
?>
<div class="block">
    <div class="block-title">
        <h2><strong>Variable Detail</strong> Create</h2>
    </div>
    <?php echo $this->renderPartial('_form', array('model' => $model)); ?>
</div>