<?php
$this->breadcrumbs = array(
    'Users' => array('index'),
    $model->id,
);
?>

<div class="block">
    <div class="block-title">
        <h2>View User #<strong><?php echo $model->id; ?></strong></h2>
    </div>
    <?php
    $this->widget('zii.widgets.CDetailView', array(
        'data' => $model,
        'attributes' => array(
            'id',
            'username',
            'email',
            'password',
            'status',
            'last_login',
            'last_login_ip',
            'token',
            'parent_id',
            'created_at',
            'updated_at',
        ),
        'htmlOptions' => array('class' => 'table table-borderless table-striped'),
    ));
    ?>
    <?php echo CHtml::link('<i class="fa fa-arrow-left"></i> Back', array('admin/user'), array('class' => 'btn btn-warning', 'style' => 'margin-bottom:20px;')); ?>
</div>