<?php
class database{
    public function connect(){
                $db = new PDO("mysql:host=localhost;dbname=lyrics_1","root","");
                $db->exec("set names utf8");
                $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
                return $db;
                }

}
