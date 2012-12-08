<h1>Lsitado de Tareas</h1>
<?php
echo $this->breadcrumbs=array('Tareas'); 
echo "Probando la lista de Tareas INDEX";
?>
<table>
    <tr>
        <td>ID</td>
        <td>Nombre</td>
        <td>Descripcion</td>
        <td>VER</td>
        <td>Editar</td>
    </tr>
    <?php    foreach ($tareas as $t){ ?>
    <tr>
        <td><?php echo $t->id;?></td>
        <td><?php echo $t->nombre;?></td>
        <td><?php echo $t->descripcion;?></td>        
        <td><?php echo CHtml::link('Ver',array('view','id'=>$t->id));?></td>        
        <td><?php echo CHtml::link('Editar',array('edit','id'=>$t->id));?></td>
    </tr>    
    <?php } ?>
</table>
    
