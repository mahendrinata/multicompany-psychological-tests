<?php
$this->breadcrumbs=array(
	'Variable Details'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List VariableDetail', 'url'=>array('index')),
	array('label'=>'Create VariableDetail', 'url'=>array('create')),
	array('label'=>'View VariableDetail', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage VariableDetail', 'url'=>array('admin')),
);
?>

<h1>Update VariableDetail <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>