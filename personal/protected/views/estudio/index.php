<?php
$this->breadcrumbs=array(
	'Estudios',
);

$this->menu=array(
	array('label'=>'Create Estudio', 'url'=>array('create')),
	array('label'=>'Manage Estudio', 'url'=>array('admin')),
);
?>

<h1>Estudios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
