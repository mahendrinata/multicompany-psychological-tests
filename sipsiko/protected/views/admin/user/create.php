<?php
$this->breadcrumbs = array(
    'Users' => array('index'),
    'Create',
);
?>
<div class="block">
    <div class="block-title">
        <h2><strong>User</strong> Create</h2>
    </div>
    <?php echo $this->renderPartial('_form', array('model' => $model)); ?>
</div>