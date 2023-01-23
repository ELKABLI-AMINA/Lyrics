<?php
require_once './autoload.php';
$home1      = new HomeController;
$chanson1   = new chansonController;
$user1      = new userController;

$pages      = ['dashboard', 'login'];

if (isset($_POST['save']))      $chanson1->addChanson($_POST['titre'], $_POST['content'], $_POST["categorie"], $_POST['nom_artiste'], $_POST['album'], $_POST['année_création']);
if (isset($_POST["delete"]))    $chanson1->deleteChanson($_POST["id_chanson"]);
if (isset($_POST['edit']))      $chanson1->updateChanson($_POST['id_chanson'], $_POST['titre'], $_POST['content'], $_POST["categorie"], $_POST['nom_artiste'], $_POST['album'], $_POST['année_création']);
if (isset($_POST['search']))    $home1->searchChanson(($_POST['search']));
if (isset($_POST['login']))     $user1->login($_POST['email'], $_POST['password']);
if (isset($_POST['logout']))    $user1->logout();


if (isset($_GET['page'])){     
                //           Lyrics/dashboard      =>   index.php?page=dashboard

                if (in_array($_GET['page'], $pages)) {
                                $page = $_GET['page'];
                                if (isset($_SESSION["admin_name"])) {
                                                $home1->index('dashboard');
                                } else {
                                                $home1->index($page);
                                }
                } else {
                                include('views/includes/404.php');
                }
} else {
                $home1->index('dashboard');
}
