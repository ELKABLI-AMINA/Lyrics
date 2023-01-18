<?php
require_once('databaseClass.php');
class chanson
{
   

    

    public function AddChanson($title, $paroles, $categorie)

    {
        $db = new Database;
        $pdo = $db->Connect();
        $sql = "INSERT INTO `joke`(`title`,`paroles`,`categorie`) VALUES (:title,:paroles,:categorie,)";
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(":title", $title);
        $stmt->bindParam(":paroles",$paroles);
        $stmt->bindParam(":categorie",$categorie);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
 
   

    public  function updateChanson($id_chanson ,$title, $paroles, $categorie_id)
    {
                $db = new Database;
                $pdo = $db->Connect();
        
       
        $sql = "UPDATE chanson SET  `title`=:title,`paroles`=:paroles, `categorie_id`=:categorie_id, WHERE id_chanson=:id_chanson";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":title",  $title);
        $stmt->bindParam(":paroles", $paroles);
        $stmt->bindParam(":categorie_id",$categorie_id);
        $stmt->bindParam(":id_chanson",$id_chanson);
        if ($stmt->execute()) {
           
            return true;
        } else {
            return false;
        }
    }
    public  function delete_joke($id_chanson)
    {
                $db = new Database;
                $pdo = $db->Connect();

        $sql = "DELETE FROM `chanson` WHERE id_chanson=:id_chanson";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":id_chanson",  $id_chanson);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
 
    }
}