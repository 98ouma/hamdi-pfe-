<?php
 include_once('../../Config/connexion.inc.php');
  session_start();

 $update = false;
 $id=0;
 $Nom = "";
			$Categorie = "";
            $Introduction_pat = "";
			$Paragraphe1_pat ="";
			$Paragraphe2_pat = "";
			$Conclusion_pat ="";

if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
  		$update = true;
	
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM patrimoine_test WHERE Id_pat  = ?";
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    


			$Nom = $row['Nom_pat'];
			$Categorie = $row['Categorie'];
            $Introduction_pat = $row['Introduction_pat'];
			$Paragraphe1_pat = $row['Paragraphe1_pat'];
			$Paragraphe2_pat = $row['Paragraphe2_pat'];
			$Conclusion_pat = $row['Conclusion_pat'];

		}}}
}
	
  if (isset($_POST['btnAjout']))
  {
      $nom=$_POST['Nom_pat'];
      $Categorie=$_POST['Categorie'];
      $Introduction=$_POST['Introduction'];
      $Paragraphe1=$_POST['P1'];
      $Paragraphe2=$_POST['P2'];
      $Conclusion=$_POST['Conclusion'];
      $sql= "INSERT INTO patrimoine_test (Nom_pat,Categorie,Introduction_pat,Paragraphe1_pat,Paragraphe2_pat,Conclusion_pat)
       VALUES('$nom','$Categorie','$Introduction','$Paragraphe1','$Paragraphe2','$Conclusion')";
      if(mysqli_query($conn,$sql))
      { 
          $_SESSION['message'] = "Patrimoine  Ajouter "; 

	header('location: ../../Dashbord_Admin/Dashboard/Dashboard_ListeDesPatrimoines.php');
      }else
      {
            $msg = "Failed to ajouter  Patrimoine";
      }
       

  }  
  
  if (isset($_POST['btnmaj'])) {
	$id = $_POST['id'];
	  $nom=$_POST['Nom_pat'];
      $Categorie=$_POST['Categorie'];
      $Introduction=$_POST['Introduction'];
      $Paragraphe1=$_POST['P1'];
      $Paragraphe2=$_POST['P2'];
      $Conclusion=$_POST['Conclusion'];

	mysqli_query($conn, "UPDATE patrimoine_test SET Nom_pat='$nom', Categorie='$Categorie' 
    , Introduction_pat='$Introduction', Paragraphe1_pat='$Paragraphe1', Paragraphe2_pat='$Paragraphe2', Conclusion_pat='$Conclusion'WHERE Id_pat=$id");
	$_SESSION['message'] = "Patrimoine à jour avec succes !"; 
	header('location: ../../Dashbord_Admin/Dashboard/Dashboard_ListeDesPatrimoines.php');
}
  if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($conn, "DELETE FROM patrimoine_test WHERE Id_pat=$id");
	$_SESSION['message'] = "patrimoine supprimer ok!"; 
	header('location: ../../Dashbord_Admin/Dashboard/Dashboard_ListeDesPatrimoines.php');
}
?>