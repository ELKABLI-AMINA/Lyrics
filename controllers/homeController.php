<?php

class HomeController{
                public $chanson;
                public function __construct()
                {
                                $this->chanson = new chanson;       
                                
                }
                public function index($page,$title){
                               
                                ob_start();
                                include_once "views/".$page.".php";
                                $content = ob_get_clean();
                                include_once "views/home.php";
                }   
                public function addChanson($title,$paroles,$nom_artiste,$album,$année_création){
                                $this->chanson->AddChanson($title,$paroles,$nom_artiste,$album,$année_création);

                }
               
}
?>
