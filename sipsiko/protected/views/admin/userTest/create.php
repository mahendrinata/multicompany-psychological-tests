<?php
$this->breadcrumbs = array(
    'Roles' => array('index'),
    'Create',
);
?>
<div class="block">
    <div class="block-title">
        <h2><strong>Role</strong> Create</h2>
    </div>
    <?php echo $this->renderPartial('_form', array('model' => $model)); ?>
</div>