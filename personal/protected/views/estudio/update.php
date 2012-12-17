<?php
$this->breadcrumbs=array(
	'Estudios'=>array('index'),
	$model->idEstudios=>array('view','id'=>$model->idEstudios),
	'Update',
);

$this->menu=array(
	array('label'=>'List Estudio', 'url'=>array('index')),
	array('label'=>'Create Estudio', 'url'=>array('create')),
	array('label'=>'View Estudio', 'url'=>array('view', 'id'=>$model->idEstudios)),
	array('label'=>'Manage Estudio', 'url'=>array('admin')),
);
?>

<h1>Update Estudio <?php echo $model->idEstudios; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>