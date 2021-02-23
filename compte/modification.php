<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title></title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/header.css">



</head>

<body id="page-top">


    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
  </head>

    <div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="http://127.0.0.1:8000">🛍️ PassionFroid</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
      <nav class="navbar navbar-light">
        <form class="form-inline" method='POST'>
        <input class="form-control mr-sm-2" type="search" name="recherche" placeholder="Search" aria-label="Search">
        <!-- <button class="btn btn-light" type="submit">Search</button> -->
        </li>
  </form>
</nav>
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
        
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 text-muted" href="../index2.php">Menu</a>
      <a class="p-2 text-muted" href="../index2.php#experience">Articles</a>
      <a class="p-2 text-muted" href="#">A la Une</a>

    </nav>
  </div>

  <?php

$db = new PDO('mysql:host=localhost;dbname=h48', 'root','');


$req = $db->prepare('SELECT * FROM articles WHERE id=:num');

$req->bindValue(':num',$_GET['IDtable'],PDO::PARAM_INT);

$executeIsOk = $req->execute();

$liste = $req->fetch();

?>
  <form action="confirm_modif.php" method="post" enctype="multipart/form-data">
    <input type="hidden"  name="IDtable" value="<?= $liste['id'] ?>">

    <p>
        
        <label for="titre">Titre</label><br>
        <input type="text" name="titre" class="form-control"  id="exampleFormControlInput1 titre" value="<?= $liste['titre'] ?>">
        <center>
          <input type="checkbox" name="type" id="type" value="Photos Ambiance"><strong style="margin-left: 1%;">Photos Ambiance</strong>
          <input type="checkbox" name="type" id="type" style="margin-left: 10%;" value="Photos Produits"><strong style="margin-left: 1%;">Photos Produits</strong>
        </center>
    </p>
    <p><center><input type="submit" class="btn btn-success" value="Enregistrer"></p></center>
</form>
</body>
</head>