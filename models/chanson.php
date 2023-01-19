<?php
require_once(__DIR__ . "./../database/DB.php");
class chanson
{




    public function AddChanson($title, $paroles, $nom_artiste, $album, $année_création)

    {
        $db   = new Database;
        $pdo  = $db->Connect();

        $sql  = "INSERT INTO `chanson`(`title`,`paroles`,`nom_artiste`,`album`,`année_création`) VALUES ( ?,?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$title, $paroles, $nom_artiste, $album, $année_création]);
    }



    public  function updateChanson($id_chanson, $title, $paroles, $categorie_id, $nom_artiste, $album, $année_création)
    {
        $db  = new Database;
        $pdo = $db->Connect();

        $sql  = "UPDATE chanson SET  `title`=?,`paroles`=?, `categorie_id`=?, `nom_artiste`=?,`album`=?,`année_création`=? WHERE id_chanson=?";
        $stmt = $pdo->prepare($sql);



        if ($stmt->execute([$title, $paroles, $categorie_id, $nom_artiste, $album, $année_création])) {

            return true;
        } else {
            return false;
        }
    }
    public  function deleteChanson($id_chanson)
    {
        $db  = new Database;
        $pdo = $db->Connect();

        $sql  = "DELETE FROM `chanson` WHERE id_chanson=:id_chanson";
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(":id_chanson",  $id_chanson);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
