<?php
$this->breadcrumbs = array(
    'Change Profile',
);
?>
<div class="block">
    <div class="block-title">
        <h2><strong>Change</strong> User Profile</h2>
    </div>
    <?php
    foreach ($model->user_profiles as $profile) {
        echo $this->renderPartial('_form_member', array('model' => $profile));
    }
    ?>
</div>