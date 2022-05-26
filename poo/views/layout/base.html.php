<?php    require_once(ROOT."views/partials/header.html.php"); ?>


    <div class="wrapper     ">
        <div class="sidebar-left  bg-dark">
                  <div class="top mt-2">
                      <img src="<?=WEB_URL?>/img/avatar.jpeg" alt="" srcset="">
                      <p>
                          <small class="fst-italic text-white  fs-6"> Nom et Prenom </small><br>
                          <small class="fst-italic text-white fs-6"> Profil</small>
                      </p>
                  </div>
                  <div class="bottom">
                  <div class="list-group">
                           
                            <a href="#" class="list-group-item list-group-item-action position">Cours</a>
                            <a href="#" class="list-group-item list-group-item-action position">Inscription</a>
                            <a href="#" class="list-group-item list-group-item-action position">Professeur</a>
                            <a href="#" class="list-group-item list-group-item-action position">Classe</a>
                            <a href="#" class="list-group-item list-group-item-action position">Module</a>
                            <a href="#" class="list-group-item list-group-item-action position">Utilisateurs</a>
                   </div>


                  </div>
        </div>
        <div class="content  ">
            <div class="header shadow   ">
                <ul class="nav justify-content-end bg-white">
                    <li class="nav-item ">
                        <a class="nav-link active text-dark fs-6" href="#">Active link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fs-6" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled text-dark fs-6" href="#">Deconnexion</a>
                    </li>
                </ul>
            </div>
            <div class="middle  d-flex justify-content-center">
            <div class="card border-light my-3 w-75 shadow   " >
                    <div class="card-header bg-transparent border-light bg-header">Header</div>
                    <div class="card-body text-success">
                       
                        <div class="card-text">  <?=$content_for_views?>  </div>
                    </div>
                   
                    </div>
                
                      
            </div>
        </div>
    </div>
   
<?php    require_once(ROOT."views/partials/footer.html.php"); ?>