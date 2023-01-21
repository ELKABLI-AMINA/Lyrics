<?php
require_once './autoload.php';
require_once './controllers/HomeController.php';

$home   = new HomeController();
$pages  = ['home','add','update','delete','dashboard','login'];

if (isset($_POST['save']))    $home->addChanson($_POST['titre'],$_POST['content'],$_POST["categorie"],$_POST['nom_artiste'],$_POST['album'],$_POST['année_création']);
if (isset($_POST["delete"]))    $home->deleteChanson($_POST["id_chanson"]);
if (isset($_POST['edit']))    $home->updateChanson($_POST['id_chanson'],$_POST['titre'],$_POST['content'],$_POST["categorie"],$_POST['nom_artiste'],$_POST['album'],$_POST['année_création']);

if(isset($_GET['page'])){//
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