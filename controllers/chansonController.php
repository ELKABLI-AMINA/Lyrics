<?php

class chansonController{
                public $chansonModel;

                public function __construct(){
                     $this->chansonModel = new chanson;
                }
                public function addChanson($title,$paroles,$categorie,$nom_artiste,$album,$année_création){
                    $count = 0;
                    foreach($title as $title1){
                        $this->chansonModel->AddChanson($title[$count],$paroles[$count],$categorie[$count],$nom_artiste[$count],$album[$count],$année_création[$count]);
                        $count++;
                    }
                }
                public function getChanson(){
                                $this->chansonModel->getChanson();
                }

                public function updateChanson($id_chanson, $title, $paroles, $categorie_id, $nom_artiste, $album, $année_création){
                                $this->chansonModel->updateChanson($id_chanson, $title, $paroles, $categorie_id, $nom_artiste, $album, $année_création);
                    
                }
                public function deleteChanson($id_chanson){
                                $this->chansonModel->deleteChanson($id_chanson);

                }

               
                

        
               
}
?>
