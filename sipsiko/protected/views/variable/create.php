<?php
$this->breadcrumbs = array(
    'Variables' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List Variable', 'url' => array('index')),
    array('label' => 'Manage Variable', 'url' => array('admin')),
);
?>

    <h1>Create Variable</h1>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>