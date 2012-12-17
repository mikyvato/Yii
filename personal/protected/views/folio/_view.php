<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idfolio')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idfolio), array('view', 'id'=>$data->idfolio)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lugar')); ?>:</b>
	<?php echo CHtml::encode($data->lugar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('psicologica')); ?>:</b>
	<?php echo CHtml::encode($data->psicologica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tecnica')); ?>:</b>
	<?php echo CHtml::encode($data->tecnica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entrevista')); ?>:</b>
	<?php echo CHtml::encode($data->entrevista); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('puntaje')); ?>:</b>
	<?php echo CHtml::encode($data->puntaje); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_idusuario')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_idusuario); ?>
	<br />


</div>