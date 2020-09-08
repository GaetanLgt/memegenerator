<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta author="gaetan langlet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ExoAjax</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./assets/css/style.css?version=1.0.0">
  <script src="https://kit.fontawesome.com/9de8c46666.js" crossorigin="anonymous"></script>
</head>
<body>
  <header>
    <div class="container-fluid">
      <div class="container">
        <nav class="navbar navbar-expand-lg">
            <!-- navbar-brand : par défaut à gauche pour le logo image ou texte -->
                <div class="col-12 col-sm-12 col-md-4">
                    <a class="navbar-brand" href="./accueil.html">
                    
                    <span class="w-50">Un site</span></a>
                </div>
            <!-- data-toggle : bascule sur une cible -->
            <!-- data-target : nomme la cible avec un ID (#name) ou une Class (.name) -->
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarLinks">
              <!-- navbar-toggler-icon : Dessine un menu burger mais peut-être remplacer avec background-image -->
              <span class="navbar-toggler-icon bg-light" style="background-image: url(./assets/img/chapeau.svg)"></span>
            </button>
            <!-- 
              collapse : l'élément est déroulable
              navbar-collapse :  prévient que c'est un element du menu qui est deroulable
            -->
            
            <div class="collapse navbar-collapse" id="navbarLinks">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#">lien 1</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">lien 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">lien 3</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">lien 4</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">lien 5</a>
                  </li>
              </ul>
            </div>
                          
        </nav>
      </div>
    </div>
  </header>
  
  <main>