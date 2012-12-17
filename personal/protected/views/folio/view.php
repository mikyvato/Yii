<?php
$this->breadcrumbs=array(
	'Folios'=>array('index'),
	$model->idfolio,
);

$this->menu=array(
	array('label'=>'List Folio', 'url'=>array('index')),
	array('label'=>'Create Folio', 'url'=>array('create')),
	array('label'=>'Update Folio', 'url'=>array('update', 'id'=>$model->idfolio)),
	array('label'=>'Delete Folio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idfolio),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Folio', 'url'=>array('admin')),
);
?>

<h1>View Folio #<?php echo $model->idfolio; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idfolio',
		'lugar',
		'psicologica',
		'tecnica',
		'entrevista',
		'puntaje',
		'usuario_idusuario',
	),
)); ?>
