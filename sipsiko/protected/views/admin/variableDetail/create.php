<?php
$this->breadcrumbs = array(
    'Variable Details' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List VariableDetail', 'url' => array('index')),
    array('label' => 'Manage VariableDetail', 'url' => array('admin')),
);
?>

<h1>Create VariableDetail</h1>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>