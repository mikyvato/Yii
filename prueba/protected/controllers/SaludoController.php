<?php
/*
 * Creando mi primer controlador en Yii
 */
class SaludoController extends Controller {
    
    public function actionIndex() {
        $saludo = "Hola que tal";
        $this->render('index',array('saludo'=>$saludo));
    }
}

?>
