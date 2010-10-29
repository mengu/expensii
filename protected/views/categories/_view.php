<tr>
    <td><a href="<?= CController::createUrl('categories/view/'.$data->id) ?>"><?php echo CHtml::encode($data->name); ?></a></td>
    <td><?php echo CHtml::encode($data->totalcost); ?></td>
</tr>