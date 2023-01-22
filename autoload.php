<?php
session_start();
spl_autoload_register('autoload'); 
function autoload($class_name){
                $array_paths = array(
                                'models/',
                                'controllers/',
                                'database/'
                );
                $count =0;

                foreach($array_paths as $path){
                    
                                $file = sprintf($path.'%s.php',$class_name); // retourne une chaine formatée  exemple $file = models/chanson.php
                                if(is_file($file)){
                                                include_once $file;
                                
                                }
                                else {
                                    $count++;
                                    
                                }
                }if ($count==(3)){
                    echo "not found";
                }

}

