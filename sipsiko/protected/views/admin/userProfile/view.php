<?php
$this->breadcrumbs = array(
    'User Profiles' => array('index'),
    $model->id,
);

$this->menu = array(
    array('label' => 'List UserProfile', 'url' => array('index')),
    array('label' => 'Create UserProfile', 'url' => array('create')),
    array('label' => 'Update UserProfile', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete UserProfile', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage UserProfile', 'url' => array('admin')),
);
?>

<h1>View UserProfile #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'first_name',
        'last_name',
        'address',
        'phone',
        'photo',
        'status',
        'user_id',
        'role_id',
        'created_at',
        'updated_at',
    ),
));
?>
