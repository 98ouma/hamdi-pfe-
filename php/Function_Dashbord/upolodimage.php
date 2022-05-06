<?php
 include_once('../../Config/connexion.inc.php');
 session_start();
  $update = false;
$id=0;
 $Nom = "";
			$path = "";
      $nompatrimoine = "";

if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
  		$update = true;
	
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement

        $sql = "SELECT id,nom,image,patrimoine_test.Nom_pat,patrimoine_test.Id_pat  FROM photo_test INNER JOIN patrimoine_test  ON photo_test.Id_pat =patrimoine_test.Id_pat WHERE id   = ?";
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
                    
 $Nom =$row['nom'];
			$path = $row['image'];
            $nompatrimoine =$row['Nom_pat'];
$idpat=$row['Id_pat'];

		}}}
}
 if (isset($_POST['btnmaj'])) {
	$id = $_POST['id'];                 
  $patrimoine=$_POST['listepatrimoine'];
      $nom=$_POST['txtnom'];
       $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];    
        $folder = "../../img/".$filename;
	mysqli_query($conn, "UPDATE photo_test SET nom='$nom', image='$folder' ,Id_pat='$patrimoine'WHERE id =$id");
         if (move_uploaded_file($tempname, $folder))  {
$_SESSION['message'] = "Photo Modifier ok!! "; 
	header('location: ../../Dashbord_Admin/Dashboard/Dashbord_ListeDesimages.php');
        }else{
            $msg = "Failed to upload image";

  } 
}
  if (isset($_POST['btnAjout']))
  {
      $patrimoine=$_POST['listepatrimoine'];
      $nom=$_POST['txtnom'];
       $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];    
        $folder = "../../img/".$filename;
          

  
        // Get all the submitted data from the form
        $sql = "INSERT INTO photo_test (nom,image,Id_pat) VALUES ('$nom','$folder','$patrimoine')";
  
        // Execute query
        mysqli_query($conn, $sql);
          
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
$_SESSION['message'] = "Photo Enregistrer "; 
	header('location: ../../Dashbord_Admin/Dashboard/Dashbord_ListeDesimages.php');
        }else{
            $msg = "Failed to upload image";

  }   }
  if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($conn, "DELETE FROM photo_test WHERE id=$id");
	$_SESSION['message'] = "image supprimer ok!"; 
	header('location: ../../Dashbord_Admin/Dashboard/Dashbord_ListeDesimages.php');
}
?>