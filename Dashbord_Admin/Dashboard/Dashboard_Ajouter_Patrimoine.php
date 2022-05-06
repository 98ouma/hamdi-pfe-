 <?php
        include_once('../../Config/connexion.inc.php');
     include('../../php/Function_Dashbord/AjoutPatrimoine.php');
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
   
    <meta charset="UTF-8" />

   <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Admin Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css" />
        <link rel="stylesheet" href="assets/css/styleform.css" />

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

       

          <div class="user">
            <img src="assets/imgs/customer01.jpg" alt="" />
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
 
        <!-- ================ Order Details List ================= -->
        <div class="container p-5">
            
            <div class="cardHeader">
              <h2>Patrimoine Details</h2>
             <input type="hidden" name="id" value="<?php echo $id; ?>">
            </div>
                       
                 <form method="POST" action="../../php/Function_Dashbord/AjoutPatrimoine.php">
                   <div class="row">
    <div class="col-25">
      <label for="fname">Nom du patrimoine</label>
    </div>
    <div class="col-75">
                        <input   placeholder="Nom du patrimoine" required type="text" class="form-control" name="Nom_pat" id="name" aria-describedby="helpId" placeholder="" value="<?php echo $Nom; ?>">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="country">Categorie</label>
    </div>
    <div class="col-75">
      <input required class="form-check-input" type="radio" name="Categorie" id="PatrimoineExistant" value="PatrimoineExistant" <?php if ($Categorie == 'PatrimoineExistant') echo 'checked="checked"'; ?>>
  <label class="form-check-label" for="flexRadioDefault1">
  Patrimoine Existant
  </label>
   <input class="form-check-input" required type="radio" name="Categorie" id="PatrimoineDémoli"   value=" PatrimoineDemoli"<?php if ($Categorie == 'PatrimoineDemoli') echo 'checked="checked"'; ?>>
  <label class="form-check-label" for="flexRadioDefault2">
  Patrimoine Démoli
  </label>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">Introduction</label>
    </div>
    <div class="col-75">
      <textarea id="subject"  placeholder="Write something.." style="height:200px"
        placeholder=" Introduction"  required name="Introduction" id="Introduction" ><?php echo $Introduction_pat; ?></textarea>
    </div>

  </div>
  <br>
    <div class="row">
    <div class="col-25">
      <label for="subject">Paragraphe 1</label>
    </div>
    <div class="col-75">
                                
      <textarea id="subject" placeholder="Write something.." style="height:200px"    required name="P1" id="P1" >
      <?php echo $Paragraphe1_pat; ?></textarea>
    </div>
    
  </div>
  <br>
    <div class="row">
    <div class="col-25">
      <label for="subject">Paragraphe 2</label>
    </div>
    <div class="col-75">
      <textarea id="subject"  name="P2"  placeholder="Write something.." style="height:200px"
        placeholder=" Introduction"  required name="Introduction" id="Introduction" ><?php echo $Paragraphe2_pat; ?></textarea>
    </div>
    
  </div>
  <br>
    <div class="row">
    <div class="col-25">
      <label for="subject">Conclusion</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"
        placeholder=" Introduction"  required  name="Conclusion" id="Introduction" ><?php echo $Conclusion_pat; ?></textarea>
    </div>
    
  </div>
  <br>
  <div class="row">
                    <?php if ($update == true): ?>
	<button type="submit" name="btnmaj"  >Mise à Jour</button>
<?php else: ?>
	<button  type="submit" name="btnAjout" >Sauvgarde</button>
<?php endif ?>
  
  </div>
       

            </form>
             

         
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
