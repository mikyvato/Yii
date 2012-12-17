<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idexperiencia')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idexperiencia), array('view', 'id'=>$data->idexperiencia)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('empresa')); ?>:</b>
	<?php echo CHtml::encode($data->empresa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inicio')); ?>:</b>
	<?php echo CHtml::encode($data->inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('finalizacion')); ?>:</b>
	<?php echo CHtml::encode($data->finalizacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jefeInmediato')); ?>:</b>
	<?php echo CHtml::encode($data->jefeInmediato); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_idusuario')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_idusuario); ?>
	<br />


</div>