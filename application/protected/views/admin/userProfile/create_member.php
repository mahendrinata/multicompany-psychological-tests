<?php
$this->breadcrumbs = array(
    'User Profiles' => array('index'),
    'Create',
);
?>
<div class="block">
    <div class="block-title">
        <h2><strong>Member Profile</strong> Create</h2>
    </div>
    <?php echo $this->renderPartial('_form_member', array('model' => $model)); ?>
</div>