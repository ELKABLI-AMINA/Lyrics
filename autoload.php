<?php
session_start();
spl_autoload_register('autoload'); 
function autoload($class_name){
                $array_paths = array(
                                'database/',
                                'app/classes',
                                'models/',
                                'controllers/',
                );
                foreach($array_paths as $path){
                                $file = sprintf($path.'%.php',$class_name); // retourne une chaine formatée
                                if(is_file($file)){
                                                include_once $file;
                                }
                }
}






?>