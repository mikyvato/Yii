<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Tarea extends CActiveRecord {
    
    public static function model ($className=__CLASS__){
        return parent::model($className);
    }
    
    public function rules (){
        return array(
            array('nombre,descripcion','required','message'=>'El Campo es Obligatorio'),
        );
    }
}
?>
