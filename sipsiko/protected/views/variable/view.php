<?php
$this->breadcrumbs = array(
    'Variables' => array('index'),
    $model->name,
);

$this->menu = array(
    array('label' => 'List Variable', 'url' => array('index')),
    array('label' => 'Create Variable', 'url' => array('create')),
    array('label' => 'Update Variable', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete Variable', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Variable', 'url' => array('admin')),
);
?>

<h1>View Variable #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'name',
        'description',
        'status',
        'user_id',
        'created_at',
        'updated_at',
    ),
));
?>
