<?php

class chanson extends database
{




    public function AddChanson($title, $paroles,$categorie, $nom_artiste, $album, $année_création)

    {
       
        $pdo  = parent::Connect();

        $sql  = "INSERT INTO `chanson`(`title`,`paroles`,`categorie_id`,`nom_artiste`,`album`,`année_création`) VALUES ( ?,?,?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$title, $paroles,$categorie, $nom_artiste, $album, $année_création]);
    }



    public  function getChanson()
    {
        $pdo  = parent::Connect();

        $sql = "SELECT ch.id_chanson as chanson_id , ch.title as chanson_title,ch.paroles as chanson_paroles, ch.nom_artiste as artist_name, ch.album as chanson_album,ch.année_création as chanson_annee ,cat.title as categorie_title ,cat.id_categorie as categorie_id FROM chanson ch inner join categories cat  ON ch.categorie_id = cat.id_categorie ";
        $stmt = $pdo->prepare($sql); 
        $stmt->execute();
        $rows = $stmt->fetchAll();
        
         if (!empty($rows)) {
             return $rows;
            } else {
                return false;
            }
    }

    



    public  function updateChanson($id_chanson, $title, $paroles, $categorie_id, $nom_artiste, $album, $année_création)
    {
        $pdo  = parent::Connect();

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
        $pdo  = parent::Connect();
     
        $sql  = "DELETE FROM `chanson` WHERE id_chanson=:id_chanson";
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(":id_chanson",  $id_chanson);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    
    public function getCat(){

        $pdo  = parent::Connect();

        $sql = "SELECT  * FROM  categories";
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
