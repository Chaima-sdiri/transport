<?php
//connexion
$connexion= mysqli_connect('localhost','root','','abon');

	if (!$connexion){
		echo 'Erreur de connexion: '.mysqli_connect_error();
	}


	//requete
if(isset($_POST['submit'])){
	include('config/db_connect.php');
	$cin=$_POST['cin'];
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$email=$_POST['email'];
	$tele=$_POST['tele'];
	$Dloc=$_POST['Dloc'];
	$nbj=$_POST['nbj'];
	$nedep=$_POST['nbedep'];
$sql = "INSERT INTO `location`(`cin`, `nom`, `prenom`, `email`, `tele`, `Dloc`, `nbj`, `nbedep`, `bus`) VALUES ('{$cin}','{$nom}','{$prenom}','{$email}',{$tele},{$Dloc},'{$nbj}','{$nbedep}','{$bus}';")	// save to db and check
	if(mysqli_query($connexion, $sql)){
		// success
		mysqli_close($connexion);
		header("Location: page d'acceuil.php");
	} else {
		mysqli_close($connexion);
		echo 'query error: '. mysqli_error($connexion);
	}
	
}
mysqli_close($connexion);
?>