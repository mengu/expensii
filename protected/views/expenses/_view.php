<tr>
    <td><?php echo CHtml::encode($data->expense_name); ?></td>
    <td><a href="<?= CController::createUrl('categories/view/'.$data->category_id) ?>"><?php echo CHtml::encode($data->category->name); ?></a></td>
    <td><?php echo CHtml::encode($data->user->name); ?></td>
    <td><?php echo CHtml::encode($data->cost); ?></td>
    <td><a id="paid_<?= $data->id ?>" href="#"><?php echo CHtml::encode($data->paid ? 'Yes' : 'No'); ?></a></td>
    <td><?php echo CHtml::encode(date("d/m/Y h:i A", $data->dateline)); ?></td>
</tr>