<?php
session_start(); 
spl_autoload_register('autoload');  
function autoload($class_name){
                $array_paths = array(
                                'models/',
                                'controllers/',
                                'database/'
                );
                foreach($array_paths as $path){
                    
                                $file = sprintf($path.'%s.php',$class_name); // retourne une chaine formatée  exemple $file = models/chanson.php
                                if(is_file($file)){
                                                include_once $file;
                                
                                }
                            }

}

