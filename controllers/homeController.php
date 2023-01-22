<?php

class HomeController{
                public $chanson;
                public function __construct()
                {
                                $this->chanson = new chanson;       
                                
                }

                
                public function index($page,$title){
                                ob_start();
                                if($page=="dashboard"){
                                    $res = $this->chanson->getChanson();
                                    $cat   =$this->chanson->getCat();
                                }
                                include_once "views/".$page.".php";
                                $content = ob_get_clean();
                                include_once "views/home.php";
                }   
                public function addChanson($title,$paroles,$categorie,$nom_artiste,$album,$année_création){
                    $count = 0;
                    foreach($title as $title1){
                        $this->chanson->AddChanson($title[$count],$paroles[$count],$categorie[$count],$nom_artiste[$count],$album[$count],$année_création[$count]);
                        $count++;
                    }
                                

                }
                public function getChanson(){
                    $this->chanson->getChanson();

                }
               
}
?>
