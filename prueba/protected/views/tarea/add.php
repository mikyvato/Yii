<h1>Crear la Tarea</h1>
<?php $form=$this->beginWidget('CActiveForm'); ?>

<diV>
    <?php echo $form->labelEx($model,'nombre'); ?>
    <?php echo $form->textField($model,'nombre'); ?>
    <?php echo $form->error($model,'nombre'); ?>
</diV>
<diV>
    <?php echo $form->labelEx($model,'descripcion'); ?>
    <?php echo $form->textArea($model,'descripcion'); ?>
    <?php echo $form->error($model,'descripcion'); ?>
</diV>
<?php echo CHtml::submitButton('Crear');?>

<?php $this->endWidget();?>
