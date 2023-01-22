<?php

class HomeController extends admin{
              
             

                
                public function index($page,$title){
                                if($page!="login")   $this->checkAuth();
                               
                                ob_start();
                                if($page=="dashboard"){
                                    $res     = parent::getChanson();
                                    $cat     =parent::getCat();
                                    $states  = $this->statistique();
                                    include_once "views/includes/alerts.php";
                    
                                }
                                include_once "views/".$page.".php";
                                $content = ob_get_clean();
                                include_once "views/home.php";
                }   
                public function addChanson($title,$paroles,$categorie,$nom_artiste,$album,$année_création){
                    $count = 0;
                    foreach($title as $title1){
                        parent::AddChanson($title[$count],$paroles[$count],$categorie[$count],$nom_artiste[$count],$album[$count],$année_création[$count]);
                        $count++;
                    }
                                

                }
                public function getChanson(){
                    parent::getChanson();

                }

                public function updateChanson($id_chanson, $title, $paroles, $categorie_id, $nom_artiste, $album, $année_création){
                    parent::updateChanson($id_chanson, $title, $paroles, $categorie_id, $nom_artiste, $album, $année_création);
                    
                }
                public function deleteChanson($id_chanson){
                    parent::deleteChanson($id_chanson);

                }

                public function statistique(){
                   $chansons        = parent::getChanson();
                   $admins          =  parent::getAdmins();
                   $countChansons   = count($chansons);
                   $countAdmins     = count($admins);
                   $artistes        =  array();
                   $countArtistes   = 0;
                   foreach($chansons as $chanson){
                    if(!in_array($chanson["artist_name"],$artistes)){
                        $countArtistes++;
                        array_push($artistes,$chanson["artist_name"]);
                    }
                   }
                   $states = array(
                    "admins" => $countAdmins,
                    "chansons" => $countChansons,
                    "artistes" => $countArtistes
                   );
                   return $states;
                }

                public function SearchChanson($value){
                   
                    $res     = parent::Search($value);
                    $cat     =parent::getCat();
                    $states  = $this->statistique();
                    ob_start();
                    include_once "views/dashboard.php";
                    $content = ob_get_clean();
                    include_once "views/home.php";
                    
                }

                public function login($email,$password){
                   $adminInfo = parent ::login($email,$password);
                  
                   if($adminInfo){
                    $_SESSION['admin_id'] = $adminInfo['id_admin'];
                    header('location:dashboard');
                   }
                   else{
                    header('location:login');

                   }
                }
                public function checkAuth(){
                    if(!isset($_SESSION["admin_id"]))   header('location:./login');
                }
        
               
}
?>
