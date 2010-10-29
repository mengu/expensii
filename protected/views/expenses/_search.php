<div class="wide form">
    
    <?php $form=$this->beginWidget('CActiveForm', array(
    	'action'=>Yii::app()->createUrl($this->route),
    	'method'=>'get',
    )); ?>
    
    <div class="row">
    	<?php echo $form->label($model,'id'); ?>
    	<?php echo $form->textField($model,'id'); ?>
    </div>
    
    <div class="row">
    	<?php echo $form->label($model,'user_id'); ?>
    	<?php echo $form->textField($model,'user_id'); ?>
    </div>
    
    <div class="row">
    	<?php echo $form->label($model,'category_id'); ?>
    	<?php echo $form->textField($model,'category_id'); ?>
    </div>
    
    <div class="row">
    	<?php echo $form->label($model,'expense_name'); ?>
    	<?php echo $form->textField($model,'expense_name',array('size'=>60,'maxlength'=>100)); ?>
    </div>
    
    <div class="row">
    	<?php echo $form->label($model,'quantity'); ?>
    	<?php echo $form->textField($model,'quantity'); ?>
    </div>
    
    <div class="row">
    	<?php echo $form->label($model,'cost'); ?>
    	<?php echo $form->textField($model,'cost'); ?>
    </div>
    
    <div class="row">
    	<?php echo $form->label($model,'totalcost'); ?>
    	<?php echo $form->textField($model,'totalcost'); ?>
    </div>
    
    <div class="row">
    	<?php echo $form->labelEx($model,'paid'); ?>
    	<input type="radio" name="Expense[paid]" value="1" /> Yes <input type="radio" name="Expense[paid]" value="0" /> No
    </div>
    
    <div class="row">
    	<?php echo $form->label($model,'dateline'); ?>
    	<?php echo $form->textField($model,'dateline'); ?>
    </div>
    
    <div class="row buttons">
    	<?php echo CHtml::submitButton('Search'); ?>
    </div>
    
    <?php $this->endWidget(); ?>
    
</div><!-- search-form -->