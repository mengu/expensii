<tr>
    <td><a href="<?= CController::createUrl('expenses/view/'.$data->id) ?>"><?php echo CHtml::encode($data->expense_name); ?></a></td>
    <td><a href="<?= CController::createUrl('categories/view/'.$data->category_id) ?>"><?php echo CHtml::encode($data->category->name); ?></a></td>
    <td><?php echo CHtml::encode($data->user->name); ?></td>
    <td><?php echo CHtml::encode($data->quantity); ?></td>
    <td><?php echo CHtml::encode($data->cost); ?></td>
    <td><?php echo CHtml::encode($data->totalcost); ?></td>
    <td><?php echo CHtml::encode($data->upfront); ?></td>
    <td><?php echo CHtml::encode($data->balance); ?></td>
    <td><a id="paid_<?= $data->id ?>" href="#"><?php echo CHtml::encode($data->paid ? 'Yes' : 'No'); ?></a></td>
    <td><?php echo CHtml::encode(date("d/m/Y h:i A", $data->dateline)); ?></td>
</tr>