

<!DOCTYPE html>
<html>
<head>
	<title>location</title>
	<style>
       form{
		   margin:auto;
		   padding:10%;
		   padding-left:20%;
		   background:#74b9ff;
		   broder-radius:20px 20px;
		   

}
</style>
</head>
<body>


	<section class="container grey-text">
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
	     <!--Formulaire-->
		<form name="resa" id="resa" method="POST" action="save.php">
			
			<table id="location">
			<tr><!--ligne 1: type RANGE-->
				<td>cin*:</td>
				<td>
				<input type="number" name="cin"  > 
				 
				</td>
			</tr>
			<tr><!--ligne2-->
				<td>Nom*:</td>
				<td><input type="text" name="nom" required>
				</td>
			</tr>
			<tr><!--ligne3-->
				<td>preNom*:</td>
				<td><input type="text" name="prenom" required>
				</td>
			</tr>
			
			<tr><!--ligne4-->
				<td>Email*:</td>
				<td><input type="email" name="email" required>
				</td>
			</tr>
			<tr><!--ligne5-->
				<td>Telephone:</td>
				<td><input type="tel" name="tele" >
				</td>
			</tr>
			<tr><!--ligne 6: type DATE-->
				<td>date de location:</td>
				
				<td>
				<input type="date" name="Dloc"  >
				</td>
			</tr>
			<tr><!--ligne 7: type NUMBER-->
				<td>Nbre de jours:</td>
				
				<td>
				<input type="number" name="nbj" min="1" max="7" step="1" value="1" > 
				 
				</td>
			</tr>
			
			<tr><!--ligne 8: type RANGE-->
				<td>Nbre de personnes:</td>
				<td>
				<input type="number" name="nbedep" min="1" max="7" step="1" value="1" > 
				 
				</td>
				
			</tr>
			<tr><!--ligne9liste déroulant-->
				<td>bus:</td>
				<td><select name="bus" size="4" multiple>
					<option value="-1">Choisissez une bus.....</option>
					<option value="etudiant">mini bus</option>
					<option value="eleve">grand bus</option>
					
				</select>
				</td>
			</tr>
			<tr><!--derniére ligne-->
				<td></td>
				<td>
				<input type="submit" name="send" value="Envoyer">
				</td>
			</tr>
	</form>
</form>
	</section>

	
</body>
</html>


