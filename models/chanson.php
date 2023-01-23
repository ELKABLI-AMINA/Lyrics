<?php

class chanson extends categorie
{




    public function AddChanson($title, $paroles, $categorie, $nom_artiste, $album, $année_création)
    {
        $pdo  = parent::Connect();

        $sql  = "INSERT INTO `chanson`(`title`,`paroles`,`categorie_id`,`nom_artiste`,`album`,`année_création`) VALUES ( ?,?,?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array($title, $paroles, $categorie, $nom_artiste, $album, $année_création));
    }


    public  function getChanson()
    {
        $pdo  = parent::Connect();

        $sql = "SELECT ch.id_chanson as chanson_id , ch.title as chanson_title, ch.paroles as chanson_paroles, ch.nom_artiste as artist_name, ch.album as chanson_album,ch.année_création as chanson_annee ,cat.title as categorie_title ,cat.id_categorie as categorie_id FROM chanson ch inner join categories cat  ON ch.categorie_id = cat.id_categorie  order by ch.title ASC";
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

        if ($stmt->execute([$title, $paroles, $categorie_id, $nom_artiste, $album, $année_création, $id_chanson])) {

            return true;
        } else {
            return false;
        }
    }



    public  function deleteChanson($id_chanson)
    {
        
        $pdo  = parent::Connect();
        $arr['id_chonson'] = $id_chanson;
        $sql  = "DELETE FROM `chanson` WHERE id_chanson=:id_chonson";
        $stmt = $pdo->prepare($sql);

        if ($stmt->execute($arr)) {
            return true;
        } else {
            return false;
        }
    }






    public function Search($value)
    {
        $pdo  = parent::Connect();

        $sql = "SELECT  ch.id_chanson as chanson_id , ch.title as chanson_title, ch.paroles as chanson_paroles, ch.nom_artiste as artist_name, ch.album as chanson_album,ch.année_création as chanson_annee ,cat.title as categorie_title ,cat.id_categorie as categorie_id FROM chanson ch inner join categories cat  ON ch.categorie_id = cat.id_categorie  Where ch.title like ? or ch.nom_artiste like ? or ch.année_création = ?  order by ch.title ASC";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array("%" . $value . "%", "%" . $value . "%", $value));
        $rows = $stmt->fetchAll();
        if (!empty($rows)) {
            return $rows;
        } else {
            return false;
        }
    }
}
