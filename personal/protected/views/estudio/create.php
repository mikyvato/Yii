<?php
$this->breadcrumbs=array(
	'Estudios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Estudio', 'url'=>array('index')),
	array('label'=>'Manage Estudio', 'url'=>array('admin')),
);
?>

<h1>Create Estudio</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>