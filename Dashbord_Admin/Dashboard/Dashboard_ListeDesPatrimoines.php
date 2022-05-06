<?php 
  // Include config file
    include_once('../../Config/connexion.inc.php');
    include('../../php/Function_Dashbord/AjoutPatrimoine.php');
    $results_per_page = 5;

     $sql = "SELECT * FROM patrimoine_test";
     $result=mysqli_query($conn,$sql);
   $number_of_results = mysqli_num_rows($result);
$number_of_pages = ceil($number_of_results/$results_per_page);

// determine which page number visitor is currently on
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}
$this_page_first_result = ($page-1)*$results_per_page;
$sql='SELECT * FROM patrimoine_test LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
$result = mysqli_query($conn, $sql);
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
  </head>

  <body>
    <!-- =============== Navigation ================ -->
    <div class="container">
    <div class="navigation">
        <ul>
          <li>
            <a href="#">
              <span class="icon">
                 <ion-icon name="contact"></ion-icon>

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
 <ion-icon name="camera"></ion-icon>              </span>
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
        <div class="details">
            <div class="recentOrders">
            <div class="cardHeader">
              <h2>Patrimoine Details</h2>
              <a href="Dashboard_Ajouter_Patrimoine.php" class="btn">Ajouter Nouveau Patrimpoine</a>
            </div>
                       
              
                    <?php
                   
                    // Attempt select query execution
                   
                   
                        
                            echo '<table ">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Nom Patrimoine</th>";
                                        echo "<th>Catgorie</th>";
                                        echo "<th>Introduction</th>";
                                        echo "<th>Paragraphe1</th>";
                                        echo "<th>Paragraphe2</th>";
                                        echo "<th>Conclusion</th>";
                                             echo "<th >Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['Id_pat'] . "</td>";
                                        echo "<td>" . $row['Nom_pat'] . "</td>";
                                        echo "<td>" . $row['Categorie'] . "</td>";
                                        echo "<td>" . $row['Introduction_pat'] . "</td>";
                                      echo "<td>" . $row['Paragraphe1_pat'] . "</td>";
                                          echo "<td>" . $row['Paragraphe2_pat'] . "</td>";
                                        echo "<td>" . $row['Conclusion_pat'] . "</td>";

                                        echo "<td>";
                                            echo '<a href="Dashboard_Ajouter_Patrimoine.php?id='. $row['Id_pat'] .'"  class="btn btn-success">Mise à Jour</a>';
                                               echo "</td>";
                                            echo "<td>";  echo '<a href="Dashboard_ListeDesPatrimoines.php?del='. $row['Id_pat'] .'"class="btn btn-danger">Supprimer</a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                     
                    // Close connection
                    mysqli_close($conn);
                    for ($page=1;$page<=$number_of_pages;$page++) {
  echo '<a href="Dashboard_ListeDesPatrimoines.php?page=' . $page . '">' . $page . '</a> ';
}
                    ?>
             

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
