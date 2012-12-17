<?php
$this->breadcrumbs=array(
	'Estudios'=>array('index'),
	$model->idEstudios,
);

$this->menu=array(
	array('label'=>'List Estudio', 'url'=>array('index')),
	array('label'=>'Create Estudio', 'url'=>array('create')),
	array('label'=>'Update Estudio', 'url'=>array('update', 'id'=>$model->idEstudios)),
	array('label'=>'Delete Estudio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idEstudios),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Estudio', 'url'=>array('admin')),
);
?>

<h1>View Estudio #<?php echo $model->idEstudios; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idEstudios',
		'institucion',
		'anioGraduacion',
		'titulo',
		'usuario_idusuario',
	),
)); ?>
