<?php

class HomeController{
                public function index($page,$title){
                               
                                ob_start();
                                include_once "views/".$page.".php";
                                $content = ob_get_clean();
                                include_once "views/home.php";
                }   
}
?>
