<?php
$this->breadcrumbs = array(
    'Variables' => array('index'),
    $model->name => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => 'List Variable', 'url' => array('index')),
    array('label' => 'Create Variable', 'url' => array('create')),
    array('label' => 'View Variable', 'url' => array('view', 'id' => $model->id)),
    array('label' => 'Manage Variable', 'url' => array('admin')),
);
?>

    <h1>Update Variable <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>