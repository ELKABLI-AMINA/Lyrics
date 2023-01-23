<?php

class HomeController{
                public $chansonModel;
                public $adminModel;

                public function __construct(){
                    $this->chansonModel = new chanson;
                    $this->adminModel   =new admin;
                }
    
               
    
                public function index($page){
                    ////
                                if($page=="dashboard")  $this->checkAuth();
                                ////
                                ob_start();
                                if($page=="dashboard"){
                                   
                                    $res     =  $this->chansonModel->getChanson();
                                    $cat     = $this->chansonModel->getCat();
                                    $states  = $this->statistique();
                                    include_once "views/includes/forms.php";
                    
                                }
                                include_once "views/".$page.".php";
                                $content = ob_get_clean();
                                $title=$page;
                                include_once "views/home.php";
                }   
              

                public function statistique(){
                   $chansons        = $this->chansonModel->getChanson();
                   $admins          = $this->adminModel->getAdmins(); 
                   ////
                   if(is_array($chansons)){
                     $countChansons   = count($chansons); // count marche seulement aves array return un nb
                   }
                   else{
                    $countChansons=0;
                   }
                   ////
                    
                   $countAdmins     = count($admins);
                   $artistes        =  array();
                   $countArtistes   = 0;
                   if(is_array($chansons)){
                    foreach($chansons as $chanson){
                    if(!in_array($chanson["artist_name"],$artistes)){
                        $countArtistes++;
                        array_push($artistes,$chanson["artist_name"]);
                    }
                   }
                   }
                   
                   $states = array(
                    "admins"   => $countAdmins,
                    "chansons" => $countChansons,
                    "artistes" => $countArtistes
                   );
                   return $states;
                }


                public function checkAuth(){
                    if(!isset($_SESSION["admin_id"]))   header('location:./login');
                }


                public function SearchChanson($value){
                   
                    $res        = $this->chansonModel->Search($value);
                    $cat        = $this->chansonModel->getCat();
                    $states     = $this->statistique();
                    ob_start();
                    include_once "views/includes/forms.php";
                    include_once "views/dashboard.php";
                    $content = ob_get_clean();
                    include_once "views/home.php";
                    
                }


        
               
}
?>
