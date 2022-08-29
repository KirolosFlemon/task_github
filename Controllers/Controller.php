<?php

class Controller {
 public static function CreateView($viewName){
    require_once("./Views/$viewName.php");
 }
 public static function getFile(){
    require_once("./js/main.js");
 }


    
}
?>