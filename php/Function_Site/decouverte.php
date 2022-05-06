<!DOCTYPE html>
<html>
<head>
<?php
    include_once('../php/connexion.inc.php');
    ?>
    <title> Manouba vision des temps discover  </title>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://kit.fontawesome.com/7ae47ff08e.js" crossorigin="anonymous"></script>
  <script src="https://use.fontawesome.com/90be2e5f98.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="../fonts/font-awesome.min.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../bootstrap/js/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/decouverte.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<body>
 
  <header>
    <div>
      <nav>
      <div class="nav-el">
          <img src="../img/logo.png" style="width: auto; height: 70px;">
          <ul>
            <li><a style="color: white; text-decoration: none;" class="nav-link" href="../index.html">Acceuil</a></li>
            <li><a style="color: white; text-decoration: none;" class="nav-link" href="../about.html">A propos</a></li>
            <li class="nav-item dropdown"> <a style="color: white; text-decoration: none;"class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Découverte</a>
              <div class="dropdown-menu">
                <a href="../php/decouverte.php" class="dropdown-item">Patrimoine existant </a>
                <a href="../php/decouverte.php" class="dropdown-item">Patrimoine démoli</a>
              
              </div>
            </li>
              
            <li><a style="color: white; text-decoration: none;" class="nav-link" href="../html/download.html">Télécharger</a>
            </li>
          </ul>
        </div>
      </nav>
</div>
  </header>

  <div id="myCarousel" class="carousel slide mt-0 " data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="../img/door.png" style="width:100%;">
      </div>

      <div class="item">
        <img src="../img/window.png" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="../img/bg.png" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


<h2 style="color:#014034; text-align: center;margin-top: 3%;">Toutes les découvertes</h2>

<div class="row justify-content-center">
  <div class="col-4 col-md-4 col-lg-6">
 <div class="input-group mb-3 mt-3 shadow p-3 border border-secondary border rounded">
                    <div class="input-group-prepend border-5">
                        <span class="bg-white input-group-text border-0"><i class="fa fa-search" aria-hidden="true"></i></span>
                    
                    <input oninput="fetchRecents()" placeholder="search.." name="search" id="search" type="text" class="form-control border-0" aria-label="Amount (to the nearest dollar)">
                </div></div>
</div>
</div>



<tbody>
<?php
$req = "SELECT nom,img from patrimoine;" ;
$res = mysqli_query($conn, $req);

while (($rows = mysqli_fetch_array($res)) != null){
		
	$Nom_pat = $rows['nom'];
		$img_src = $rows['img'];
			
				echo (' <tr>
				
			<td>
      <div class="col-lg-3 col-md-4 mb-4 mt-5 ml-2 mr-2">
       <img src="' . $img_src . '" alt="" class="img-fluid  w-75" style="margin-left:35px;">
       <div class="gradient-box">
       <h4 class="normal-text"  > ' . $Nom_pat .' </h4>	
       <button type="button" class="mybuttonover btn btn-rounded">Voir plus</button>
     </div>
        </div> </div>
      </td>
      </tr>
				
			
			');
			
	
}
?>

</tbody>




  
    
<footer style="width: auto; background-color: #014034; color: white;">
    <div class="section-el mt-5 text-regular">
      <div class="row">
        <div class="col-md-4 col-lg-5 col-xl-5 ">
          <iframe style="margin: 30px;"
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12777.967914274843!2d10.0867555!3d36.8067291!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x214a3d8acdadead0!2sMunicipalit%C3%A9%20de%20La%20Manouba!5e0!3m2!1sfr!2stn!4v1649197747815!5m2!1sfr!2stn"
            width="450" height="250" style="border:0;margin-right: 20%;" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade" allowfullscreen=""></iframe>
        </div>
        <div class="col-md-4 col-lg-5 col-xl-5 mx-auto mt-5" style="margin-left: 25px; margin-right: 55px;">
          <p><i class="fas fa-map-marker-alt mr-3"></i> Ave Hédi Chaker, Manouba 2010</p>
          <p><i class="fas fa-phone mr-3"></i> +216 71 600 397</p>
          <p>social media
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter mr-3"></i>
            <i class="fa fa-linkedin mr-3"></i>
            <i class="fa fa-youtube mr-3"></i>
            <i class="fa fa-instagram mr-3"></i>
            <i class="fa fa-google mr-3"></i>
            <i class="fa fa-pinterest mr-3"></i>
          </p>
        </div>
      </div>
      <div class="row">
        <img src="../img/Rectangle.png">

      <div class="col-md-4 col-lg-6  text-center text-md-start" style="display: flex; gap: 20px; align-items: center;">
          <a style="text-decoration:none ; color : white;" href="index.html">Accueil</a>
          <a style="text-decoration:none ; color : white;" href="../html/about.html">A propos</a>
          <a style="text-decoration:none ; color : white;" href="../php/decouverte.php">Découverte</a>
          <a style="text-decoration:none ; color : white;" href="../html/download.html">Télécharger</a>
        </div>
        <!-- Grid column -->

        <div class="col-md-4 col-lg-6  text-md-end">
          <p class="copy-right mt-3">Copyright © Manouba vision des temps 2022</p>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>
