<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $urlPrefix ?>css/bootstrap.min.css">
    <title>Sonic, le jeu O'Top !</title>
    <link rel="stylesheet" href="<?= $urlPrefix ?>css/styles.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic+Coding:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
</head>
<body>
  <div id="header" class="row">
      <div id="logo">
        <a href="<?= $urlPrefix ?>"><img src="<?= $urlPrefix . "images/sonic-team.png" ?>" alt ="Sonic Team" class="logo" ></a>
      </div>
      <nav class="navbar navbar-expand-lg navbar-light ">
          <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link" href="<?= $urlPrefix ?>">Accueil</a>
                <a class="nav-link" href="<?= $urlPrefix . "les-createurs" ?>">Les créateurs</a>
              </div>
            </div>
          </div>
    </nav>
    <div id="recherche">
        <form class="d-flex">
          <input class="recherche" type="search" placeholder="Votre recherche" aria-label="Search">
          <button class="recherche" type="submit"><i class="fas fa-search"></i></i></button>
        </form>
    </div>
  </div>


  

