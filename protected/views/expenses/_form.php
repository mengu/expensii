<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'expense-form',
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'category_id'); ?>
        <?php echo $form->dropDownList($model,'category_id', CHtml::listData(Category::model()->findAll(), 'id', 'name')); ?>
        <?php echo $form->error($model,'category_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'expense_name'); ?>
        <?php echo $form->textField($model,'expense_name',array('size'=>60,'maxlength'=>100)); ?>
        <?php echo $form->error($model,'expense_name'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'quantity'); ?>
        <?php echo $form->textField($model,'quantity',array('size'=>60,'maxlength'=>100)); ?>
        <?php echo $form->error($model,'quantity'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'cost'); ?>
        <?php echo $form->textField($model,'cost'); ?>
        <?php echo $form->error($model,'cost'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'upfront'); ?>
        <?php echo $form->textField($model, 'upfront'); ?>
        <?php echo $form->error($model, 'upfront'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'paid'); ?>
        <input type="radio" name="Expense[paid]" value="1" <?= $model->paid ? "checked" : "" ?>/> Yes <input type="radio" name="Expense[paid]" value="0" <?= !$model->paid ? "checked" : "" ?>/> No
        <?php echo $form->error($model,'cost'); ?>
    </div>

    <div class="row buttons">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->