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

<table cellpadding="6" cellspacing="1">
<tr>
    <th>Expense name</th>
    <th>Category</th>
    <th>User</th>
    <th>Quantity</th>
    <th>Cost</th>
    <th>Total Cost</th>
    <th>Upfront</th>
    <th>Balance</th>
    <th>Paid</th>
    <th>When</th>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</table>