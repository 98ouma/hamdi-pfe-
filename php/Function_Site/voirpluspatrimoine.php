<!DOCTYPE html>
<html lang="en">

<head>
<?php
    include_once('connexion.inc.php');
    ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/nav.css">
  <script src="https://kit.fontawesome.com/7ae47ff08e.js" crossorigin="anonymous"></script>
  <script src="https://use.fontawesome.com/90be2e5f98.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-3.3.1.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <title> Manouba vision des temps voir plus patrimoine </title>
  <style> 
  header  {background-image: url("img/Rectangleblanc.png");}
 
  </style>
 
</head>

<body>
<header>
	
    <div>
      <nav>
          <div class="nav-el">
            <img src="img/logo (2).png" style="width: auto; height: 75%;">
            <ul>
              <li><a style="color: white; text-decoration: none;" class="nav-link" href="index.html">Acceuil</a></li>
              <li><a style="color: white; text-decoration: none;" class="nav-link" href="about.html">A propos</a></li>
              <li class="nav-item dropdown"> <a style="color: white; text-decoration: none;"class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Découverte</a>
              <div class="dropdown-menu">
                <a href="decouverte.php" class="dropdown-item">Patrimoine existant </a>
                <a href="decouverte.php" class="dropdown-item">Patrimoine démoli</a>
              
              </div>
            </li>
              <li><a style="color: white; text-decoration: none;" class="nav-link" href="download.html">Télécharger</a></li>
            </ul>
          </div>
          <h2 style="text-align: center; color: white;margin-top : 75px;">Musée National Militaire</h2>
          <img src="img/IMG-header.png" style="margin-left:320px; margin-right:35px; height: auto; width:700px;margin-top:2%;">
</header>
       
          <!--?php
$req = "SELECT nom,img from patrimoine" ;
$res = mysqli_query($conn, $req);

while (($rows = mysqli_fetch_array($res)) != null){
		
	$img_name = $rows['nom'];
		$img_src = $rows['img'];
			
				echo (' 
			
          <h3 class="normal-text"  > ' . $img_name .' 	</h3>
      </nav>
      ');
			
	
    }
    ?-->

  <ul class="nav justify-content-center mt-3 link-secondary">
  <li class="nav-item"  >
    <a class="nav-link" style="color:#8896AB"; href="#">Introduction</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#8896AB";  href="#">Header 1</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#8896AB";  href="#">Header 2</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#8896AB";  href="#">Header 3</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " style="color:#8896AB";  href="#">Conclusion</a>
  </li>
</ul>
<div class="row">
  <div class="col-md-6 " style="margin-left:5%; margin-right:5%;">
    <h4>Introduction</h4>
    <p></p>
    <img src="">
    <h4>header1 </h4>
    <p></p>
    <h4>header2 </h4> <p></p>
    <h4>header3 </h4> <p></p>
    <h4>conclusion</h4> <p></p></div>

</body>
</html>