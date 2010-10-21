<tr>
    <td><?php echo CHtml::encode($data->expense_name); ?></td>
    <td><?php echo CHtml::encode($data->category->name); ?></td>
    <td><?php echo CHtml::encode($data->user->name); ?></td>
    <td><?php echo CHtml::encode($data->cost); ?></td>
    <td><?php echo CHtml::encode(date("d/m/Y h:i A", $data->dateline)); ?></td>
</tr>