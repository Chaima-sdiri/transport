<?php
//connexion
$connexion= mysqli_connect('localhost','root','','abon');

	if (!$connexion){
		echo 'Erreur de connexion: '.mysqli_connect_error();
	}


	//requete
if(isset($_POST['submit'])){
	$station=$_POST['station'];
	
$sql = mysqli_query("SELECT bus FROM sta while staion=$station",$connexion);

	// save to db and check
	if(! $sql){
		// success
		header("Location: page d'accueil.php");
	} else {
		echo 'query error: '. mysqli_error($connexion);
	}
	while($row=mysqli_fetch_array($sql)){
		echo $row[1]." ".$row[2]."<br />";
	}
}
?> 



<!DOCTYPE html>
<html>
<style>
section{
		   margin:auto;
		   padding:10%;
		   padding-left:20%;
		   background:#74b9ff;
		   broder-radius:10px 10px;
		   

}
</style>

	

	<section class="container grey-text">
		
		<form class="white" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
			<input type="number" name="station">
		
			<div class="center">
				<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
			</div>
		</form>
	</section>

	

</html>

<?php mysqli_close($connexion);
?>






















	