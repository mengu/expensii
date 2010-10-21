<?php
$this->breadcrumbs=array(
	'Expenses',
);

$this->menu=array(
	array('label'=>'Create Expense', 'url'=>array('create')),
	array('label'=>'Manage Expense', 'url'=>array('admin')),
);
?>

<h1>Expenses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
