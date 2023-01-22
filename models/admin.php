<?php

class admin extends chanson{
    public  function getAdmins()
    {
        $pdo  = parent::Connect();
        $sql = "SELECT * FROM admins";
        $stmt = $pdo->prepare($sql); 
        $stmt->execute();
        $rows = $stmt->fetchAll();
        
         if (!empty($rows)) {
             return $rows;
            } else {
                return false;
            }
    }

    public function login($email, $password){
        $pdo  = parent::Connect();
        $sql = "SELECT * FROM admins WHERE email=? and password=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$email, $password]);
        $row = $stmt->fetch();
        if (!empty($row)) {
            return $row;
        } else {
            return false;
        }

    }




}





?>