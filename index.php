<?php
require_once './autoload.php';
require_once './controllers/HomeController.php';

$home   = new HomeController();
$pages  = ['home','add','update','delete','dashboard','login'];

if (isset($_POST['save'])) {
                $title             = $_POST['titre'];
                $paroles           = $_POST['content'];
                $nom_artiste       = $_POST['nom_artiste'];
                $album             = $_POST['album'];
                $année_création     = $_POST['année_création'];
                $home->addChanson($title,$paroles,$nom_artiste,$album,$année_création);

}
if(isset($_GET['page'])){
                if(in_array($_GET['page'],$pages)){  //fait partie
                                $page= $_GET['page'];
                                $home->index($page,$page);

                }else{
                                include('views/includes/404.php');
                }
}else{
                $home->index('home',"home");
}




?>