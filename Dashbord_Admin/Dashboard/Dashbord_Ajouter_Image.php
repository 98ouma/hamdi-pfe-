 <?php
        include_once('../../Config/connexion.inc.php');
     include('../../php/Function_Dashbord/upolodimage.php');
     
$sql="Select * from patrimoine_test";
$listepat=mysqli_query($conn,$sql);
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />

   <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Admin Dashboard</title>
    <!-- ======= Styles ====== -->      
      <link rel="stylesheet" href="assets/css/styleform.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>

  <body>
    <!-- =============== Navigation ================ -->
    <div class="container">
      <div class="navigation">
        <ul>
          <li>
            <a href="#">
              <span class="icon">
                <ion-icon name="logo-apple"></ion-icon>
              </span>
              <span class="title">Admin</span>
            </a>
          </li>

          <li>
            <a href="../Dashboard/dashbordadmin.html">
              <span class="icon">
                <ion-icon name="home-outline"></ion-icon>
              </span>
              <span class="title">Dashboard</span>
            </a>
          </li>

          <li>
            <a href="../Dashboard/Dashboard_ListeDesPatrimoines.php">
              <span class="icon">
                <ion-icon name="people-outline"></ion-icon>
              </span>
              <span class="title">Gestion Patrimoines</span>
            </a>
          </li>

          <li>
            <a href="../Dashboard/Dashbord_ListeDesimages.php">
              <span class="icon">
                <ion-icon name="chatbubble-outline"></ion-icon>
              </span>
              <span class="title">Gestion Des Images</span>
            </a>
          </li>

          <li>
            <a href="#">
              <span class="icon">
                <ion-icon name="settings-outline"></ion-icon>
              </span>
              <span class="title">Parametre</span>
            </a>
          </li>

          <li>
            <a href="../../php/Function_Dashbord/logout.php">
              <span class="icon">
                <ion-icon name="log-out-outline"></ion-icon>
              </span>
              <span class="title">Déconnecter</span>
            </a>
          </li>
        </ul>
      </div>

      <!-- ========================= Main ==================== -->
      <div class="main">
        <div class="topbar">
          <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
          </div>

          <div class="search">
            <label>
              <input type="text" placeholder="Search here" />
              <ion-icon name="search-outline"></ion-icon>
            </label>
          </div>

          <div class="user">
            <img src="assets/imgs/customer01.jpg" alt="" />
          </div>
        </div>

        <!-- ======================= Cards ================== -->
        <div class="cardBox">
          <div class="card">
            <div>
              <div class="numbers">1,504</div>
              <div class="cardName">Daily Views</div>
            </div>

            <div class="iconBx">
              <ion-icon name="eye-outline"></ion-icon>
            </div>
          </div>
        </div>
 <?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?> 
        <!-- ================ Order Details List ================= -->
        <div class="container p-5">
            
            <div class="cardHeader">
              <h2>Patrimoine Details</h2>
             
            </div>
               
        <form method="post" action="../../php/Function_Dashbord/upolodimage.php" enctype="multipart/form-data">
                 <input type="hidden" name="id" value="<?php echo $id; ?>">
<div class="col-12 p-0 px-4">
                    <label for="formGroupExampleInput">Nom Patrimoine</label>
        <select class="form-select d-flex align-items-center my-2" id="amount" aria-label="" name="listepatrimoine"> 

         <?php if ($update == true): ?>
<option selected value="<?php echo $idpat; ?>"><?php echo $nompatrimoine; ?></option>
<?php else: ?>
<option selected>Liste  des patrimoines</option>
<?php endif ?>
           
 <?php while ($row = mysqli_fetch_array($listepat)):?>
        <option value="<?php    echo  $row[0] ;?>"><?php    echo  $row[1] ;?>
 </option>
<?php endwhile;?>
</select>

        <div class="form-group ">
    <label for="formGroupExampleInput">Nom image</label>
    <input type="text" class="form-control" id="firstName" placeholder=""  required  name="txtnom" value="<?php echo $Nom; ?>"></div>
   
    <div class="col-12 p-5 mt-5 bg-white shadow ml-3">
                    <div class="form w-100">
                        <input required onchange="changeResource()" type="file" name="file" id="file" >
                        <i class="fa fa-camera mt-5" aria-hidden="true"></i>
                        <p id="filelabel">Faites glisser votre image ici ou cliquez dans cette zone.</p>
                    </div>
                     <div class="row">
                  <?php if ($update == true): ?>
	<button class="btn" type="submit" name="btnmaj" style="background-color:#014034;color: white;margin-top:3px;" >Mise à Jour</button>
<?php else: ?>
	<button class="btn" type="submit" name="btnAjout" style="background-color:#014034;color: white;margin-top:3px;">Sauvgarde</button>
<?php endif ?>
</div>


</form>

             

             </div>
          </div>
  </body>
          
    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
 
</html>
