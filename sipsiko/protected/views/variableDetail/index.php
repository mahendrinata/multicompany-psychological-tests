<?php
$this->breadcrumbs=array(
	'Variable Details',
);

$this->menu=array(
	array('label'=>'Create VariableDetail', 'url'=>array('create')),
	array('label'=>'Manage VariableDetail', 'url'=>array('admin')),
);
?>

<h1>Variable Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
