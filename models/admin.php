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




}





?>