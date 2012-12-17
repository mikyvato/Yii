<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idEstudios')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idEstudios), array('view', 'id'=>$data->idEstudios)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('institucion')); ?>:</b>
	<?php echo CHtml::encode($data->institucion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anioGraduacion')); ?>:</b>
	<?php echo CHtml::encode($data->anioGraduacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_idusuario')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_idusuario); ?>
	<br />


</div>