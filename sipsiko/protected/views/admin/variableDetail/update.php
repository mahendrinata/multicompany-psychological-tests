<?php
$this->breadcrumbs = array(
    'Variable Details' => array('index'),
    $model->id => array('view', 'id' => $model->id),
    'Update',
);
?>
<div class="block">
    <div class="block-title">
        <h2><strong>Variable Detail</strong> Update <?php echo $model->id; ?></h2>
    </div>
    <?php echo $this->renderPartial('_form', array('model' => $model)); ?>
</div>