
    <div class="d-flex shadow-sm bg-light" id="wrapper">
        <div class="" id="sidebar-wrapper">
            <div class="sidebar-heading text-center d-flex flex-column py-4 fs-5 border-bottom mt-5">
                <div class=" align-items-center">
                    <img   width="70px" height="70px" src="./views/assets/img/profil.jpeg" alt="" class="rounded-circle">
        <h3> ELKABLI Amina</h3>
                </div>
                <a href="scripts/logout.php" class="btn btn-lg btn-block btn-light my-3 mycolor button1 fs-6 ">Log out</a> </div>

                <a href="dashboard" type="submit"  class="list-group-item list-group-item-action  <?=  $dashStatus?> "><i
                        class="uil uil-chart-bar fs-4 me-2"></i>Dashboard</a>
                <a href="#" type="submit"  class="list-group-item list-group-item-action   <?=  $artiStatus?>"><i
                        class="uil uil-medkit me-2 fs-4" ></i>Chansons</a>
                <a href="#"  type="submit"  class="list-group-item list-group-item-action  <?=  $userStatus?>"><i
                        class="uil uil-stopwatch me-2 fs-4" ></i>Artistes</a>
                <a href="#" name="appointments-displayer" type="submit"  class="list-group-item list-group-item-action  <?=  $autorStatus?>"><i
                        class="uil uil-bookmark me-2 fs-4"></i>Autors</a>

        </div>
       
  
       
        <div id="page-content-wrapper" class="w-100" style="height: 100vh; overflow: scroll;">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="bi bi-filter-left primary-text fs-4 me-3" onclick="ShowToggle(this)" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                

            </nav>

            <div class="">
                <div class="row g-3 my-2">
                    <div class="col-md-4">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">20</h3>
                                <p class="fs-5">Nombre total des titres</p>
                            </div>
                            <i class="  uil uil-music fs-1 primary-text border  p-3"></i>
                           
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">20</h3>
                                <p class="fs-5">Nombre total des artistes</p>
                            </div>
                            <i
                                class=" uil uil-user fs-1 primary-text border  p-3"></i>
                               
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">3</h3>
                                <p class="">Total des admins</p>
                               
                            </div>
                            <i class="uil uil-user fs-1 primary-text border p-3"></i>
                        </div>
                    </div>

                    
                </div>

                <div class="row my-5">
                    <div class="">
                        <button class="col-md-1"  aria-pressed="true" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD+</button>
                       
                        <i class="col-md-1 uil uil-search "></i>
                        <input class="col-md-4"  type="search" name="" id="">
                    </div>
                    <div class=" table-responsive">
                        <table class="table mt-4 rounded-2" style="background-color: #fff; color: #000">
                           <thead>
                              <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Titre</th>
                                 <th scope="col">Nom de l'artiste</th>
                                 <th scope="col">album</th>
                                 <th scope="col">année de création</th>
                                 <th></th>
                                 <th scope="col">Tools</th>
                              </tr>
                           </thead>
      
                           <tbody>
                             
                                  <br> <tr> <h2 class='text-danger'>  No records </h2> </tr>
                             
                                    <tr>
                                       <th scope="row"></th>
                                       <td>
                                          <p class="text-truncate" style="width:200px"></p>
                                       </td>
                                       <td>
                                          <p class="text-truncate" style="width:200px"></p>
                                       </td>
                                       <td></td>
                                       <td></td>
                                       <td><img style="width:60px;" src=""></td>
                                       <td>
                                          <div class="d-flex">
                                             <button class="btn btn-primary me-1" data-bs-toggle="modal" data-bs-target="#exampleModalE" ;>
                                                Edit
                                             </button>
                                             <form action="" method="POST">
                                                <input type="hidden" name="id" value=" ">
                                                <button type="button" name="delete" class="btn btn-danger"data-bs-toggle="modal" data-bs-target="#exampleModal3" >Delete</button>
                                             </form>
                                          </div>
                                          
                                          
                                       </td>
                                    </tr>
                              <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabe3" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">Delete Song</h5>
                              </div>
                              <div class="modal-body">
                                 <form id="form_modaal">
                                   
                                    <h3 class="text-danger"> Do you want really to delete this Song</h3>
                                 </form>
                              </div>
                              <div class="modal-footer" id="modal_footer">
                                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                 <button type="button" class="btn btn-danger" onclick="ajouter()" data-bs-dismiss="modal">Yes</button>
                              </div>
                           </div>
                        </div>
                     </div>
           



                     <div class="modal fade" id="exampleModalE" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
           <div class="modal-content">
              <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">ADD+</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body " id="dynamic">
                 <form action="" method="POST" enctype="multipart/form-data" id="form_modaal">
                    <h3>Chanson:</h3>
                    <div class="mb-3">
                       <label for="recipient-name" class="col-form-label">titre:</label>
                       <input type="text" class="form-control" id="name" size="60" maxlength="60" name="name" />
                    </div>
                    <div class="mb-3">
                       <label for="recipient-name" class="col-form-label">nom de l'artiste:</label>
                       <input type="text" class="form-control" id="name" size="60" maxlength="60" name="name" />
                      
                    </div>
     
                    <div class="mb-3">
                       <label for="recipient-name" class="col-form-label">album</label>
                       <input type="text" class="form-control" name="quantity" id="date" />
                    </div>
                    <div class="mb-3">
                       <label for="recipient-name" class="col-form-label">année de création:</label>
                       <input type="date" accept="image/png ,image/jpg, image/jpeg" name="image" id="image" name="photo">
                    </div>
              </div>
              <div class="modal-footer" id="modal_footer"> 
                 <button type="submit" class="btn btn-success" name="add">Save</button>
              </div>
              </form>
           </div>
        </div>
     </div>

  </div>
                           </tbody>
                        </table>
                     </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
           <div class="modal-content">
              <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">ADD+</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body " id="dynamic">
                 <form action="" method="POST" enctype="multipart/form-data" id="form_modaal">
                    <h3>Chanson:</h3>
                    <div class="mb-3">
                       <label for="recipient-name" class="col-form-label">titre:</label>
                       <input type="text" class="form-control" id="name" size="60" maxlength="60" name="name" />
                    </div>
                    <div class="mb-3">
                       <label for="recipient-name" class="col-form-label">nom de l'artiste:</label>
                       <input type="text" class="form-control" id="name" size="60" maxlength="60" name="name" />
                      
                    </div>
     
                    <div class="mb-3">
                       <label for="recipient-name" class="col-form-label">album</label>
                       <input type="text" class="form-control" name="quantity" id="date" />
                    </div>
                    <div class="mb-3">
                       <label for="recipient-name" class="col-form-label">année de création:</label>
                       <input type="date" accept="image/png ,image/jpg, image/jpeg" name="image" id="image" name="photo">
                    </div>
              </div>
              <div class="modal-footer" id="modal_footer">
                 <button type="button" class="btn btn-primary" onclick="AddLyrics()">Add </button>
                 
                 <button type="submit" class="btn btn-success" name="add">Save</button>
              </div>
              </form>
           </div>
        </div>
     </div>

  </div>
