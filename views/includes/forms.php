
    
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
           <div class="modal-content">
              <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">ADD</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body " >
                 <form action="" method="POST" enctype="multipart/form-data"  id="dynamic">
                  <div id="article-form">
                    <h3>Chanson:</h3>
                    <div class="mb-3">
                       <label for="recipient-name" class="col-form-label" >titre:</label>
                       <input type="text" class="form-control" id="name" size="60" maxlength="60" name="titre[]" />
                    </div>
                    <div class="mb-3" id="categorie">
                       <label for="recipient-name" class="col-form-label">Categorie:</label>
                       <select name="categorie[]" >
                       <?php foreach($cat as $cat1):?>
                        <option value="<?=$cat1["id_categorie"] ?>"><?=$cat1["title"] ?></option>
                        <?php endforeach ?>
                       </select>
                    </div>

                    <div class="mb-3">
                       <label for="recipient-name" class="col-form-label " >Paroles:</label>
                        <textarea name="content[]" id="content"></textarea> 
                       
                    </div>
                    <div class="mb-3">
                       <label for="recipient-name" class="col-form-label" >nom de l'artiste:</label>
                       <input type="text" class="form-control" id="name" size="60" maxlength="60" name="nom_artiste[]" />
                      
                    </div>
     
                    <div class="mb-3">
                       <label for="recipient-name" class="col-form-label" >album</label>
                       <input type="text" class="form-control" name="album[]" id="date" />
                    </div>
                    <div class="mb-3">
                       <label for="recipient-name" class="col-form-label" >année de création:</label>
                       <input  type="number" placeholder="YYYY" min="1980" max="2023" name="année_création[]" id="">
                    </div>
              </div>
              </div>
              <div class="modal-footer" id="modal_footer">
                 <button type="button" id="" class="btn btn-primary" onclick="AddLyrics()">Add </button>
                 
                 <button type="submit" class="btn btn-success" name="save">Save All</button>
              </div>

              </form>
              
           </div>
        </div>
     </div>











     
     <div class="modal fade" id="exampleModalE" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
           <div class="modal-content">
              <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">EDIT</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body " id="dynamich">
                 <form action="" method="POST" enctype="multipart/form-data" id="form_modaal">
                    <h3>Chanson:</h3>
                    <div class="mb-3">
                       <label for="recipient-name" class="col-form-label">titre:</label>
                       <input type="text" class="form-control" id="titre" size="60" maxlength="60" name="titre" />
                    </div>
                    <input type="hidden" name="id_chanson" id="id_chanson">
                    <div class="mb-3" id="categorie">
                       <label for="recipient-name" class="col-form-label">Categorie:</label>
                       <select name="categorie" id="categorie" >
                       <?php foreach($cat as $cat1):?>
                        <option value="<?=$cat1["id_categorie"] ?>"><?=$cat1["title"] ?></option>
                        <?php endforeach ?>
                       </select>
                    </div>
                    <div class="mb-3">
                       <label for="recipient-name" class="col-form-label " >Paroles:</label>
                        <textarea id="paroles" name="content" id="content2"></textarea> 
                       
                    </div>
                    <div class="mb-3">
                       <label for="recipient-name" class="col-form-label">nom de l'artiste:</label>
                       <input type="text" class="form-control" id="nom_artiste" size="60" maxlength="60" name="nom_artiste" />
                      
                    </div>
     
                    <div class="mb-3">
                       <label for="recipient-name" class="col-form-label">album</label>
                       <input type="text" class="form-control" name="album" id="album" />
                    </div>
                    <div class="mb-3">
                       <label for="recipient-name" class="col-form-label">année de création:</label>
                       <input  type="number" placeholder="YYYY" min="1980" max="2023"  name="année_création" id="annee_creation">
                    </div>
              </div>
              <div class="modal-footer" id="modal_footer"> 
                 <button type="submit" class="btn btn-success" name="edit">Save</button>
              </div>
              </form>
           </div>
        </div>
     </div>
     <script>
      
     </script>


     <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="showParoles" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content p-5" style="min-height:200px;" >
  <p id="contenue" style="word-wrap: break-word;">

  </p>
   
</div>
  
</div>
</div>