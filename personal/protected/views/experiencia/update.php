<?php
$this->breadcrumbs=array(
	'Experiencias'=>array('index'),
	$model->idexperiencia=>array('view','id'=>$model->idexperiencia),
	'Update',
);

$this->menu=array(
	array('label'=>'List Experiencia', 'url'=>array('index')),
	array('label'=>'Create Experiencia', 'url'=>array('create')),
	array('label'=>'View Experiencia', 'url'=>array('view', 'id'=>$model->idexperiencia)),
	array('label'=>'Manage Experiencia', 'url'=>array('admin')),
);
?>

<h1>Update Experiencia <?php echo $model->idexperiencia; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>