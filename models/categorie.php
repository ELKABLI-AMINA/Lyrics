<?php
class categorie extends database  {
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
?>















