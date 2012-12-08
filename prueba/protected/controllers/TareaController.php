<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class TareaController extends Controller{
    
    public function actionIndex (){
        
        $tareas = Tarea::model()->findAll();
        $this->render('index',array('tareas'=>$tareas));
    }
    
    public function actionView ($id){
        $model = Tarea::model()->findByPk($id);
        $this->render('view',array('model'=>$model));
        
    }
    
    public function actionEdit ($id){
        $model = Tarea::model()->findByPk($id);
//        echo "<pre>";
//        print_r($_POST['Tarea']);
//        echo "</pre>";
//        Yii::app()->end();
        if (isset($_POST['Tarea'])){
            $model->attributes=$_POST['Tarea'];
        
            if ($model->save())
                $this->redirect(array('view','id'=>$model->id));
        }
        
        $this->render('edit',array('model'=>$model));
    }
}
?>
