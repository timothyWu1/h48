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




$pdo = new PDO("mysql:host=localhost;dbname=h48", "root", "", array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));


if (!empty($_POST)) {

    $_POST["titre"] = htmlentities($_POST["titre"], ENT_QUOTES); 
    
    $msg = "";

      // If upload button is clicked ...
      if (isset($_POST['upload'])) {
        // Get image name
        $image = $_FILES['image']['name'];
      
        // image file directory
        $target = "../images/".basename($image);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
          $msg = "Image uploaded successfully";
        }else{
          $msg = "Failed to upload image";
        }
      }
    $requeteSQL = "INSERT INTO articles (titre, image) VALUES ('$_POST[titre]', '$image')"; 
    $result = $pdo->exec($requeteSQL); 
  }
?>
<center><h1>Ajout Articles</h1></center>

<div class="starter-template">  
    <form method="POST" action="" enctype='multipart/form-data'>   <!-- Permet aux personnes de télécharger à la fois du texte et des fichiers -->

        <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" class="form-control" id="titre" name="titre">
        </div>

        <input type="hidden" name="size" value="1000000">
  	   <div>
  	  <input type="file" name="image">
  	   </div>

        <button  name="upload" type="submit" class="btn btn-primary" id="OK">Enregistrer</button>

    </form>
</div>

<br><br>

<a href="../index2.php#experience" class="btn btn-primary">Accueil</a>
<footer class="blog-footer">
  <p>🛒 PassionFroid</p>
  <p>
    <a href="#">Revenir en haut</a>
  </p>
</footer>
</body>
</html>