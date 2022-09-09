<style>
.dropbtn {
  background-color: #073653;
  color: white; 
  padding: 20px;
  font-size: 1.5rem;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #edae25;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #edae25;}
</style>

<div class="header_bottom">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarsExample04">
                              <ul class="navbar-nav mr-auto">
                                 <li class="nav-item active">
                                    <a class="nav-link" href="index.html">Accueil</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="products.html">Boutique</a>
                                 </li>
                                 <li class="nav-item">
                                    <div class="dropdown">
                                     <button class="dropbtn">Categorie</button>
                                       <div class="dropdown-content">
                                          @foreach($categories as $donnee)
                                          <a class="dropdown-item py-2 border-bottom" href="#">
                                          <span class="d-block text-heading">{{$donnee->libelle}}</span>
                                          </a>
                                         @endforeach
                                       </div>
                                    </div>   
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="about.html">A propos</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact Us</a>
                                 </li>
                              </ul>
                           </div>
                        </nav>
                     </div>
                     <div class="col-md-4">
                        <div class="search">
                           <form action="/action_page.php">
                              <input class="form_sea" type="text" placeholder="Search" name="search">
                              <button type="submit" class="seach_icon"><i class="fa fa-search"></i></button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>