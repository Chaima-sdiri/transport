
<!DOCTYPE html>
<html>
<head>
<title>abonnement annuelle</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<style>
body{
		   margin:auto;
		   padding:10%;
		   padding-left:20%;
		   background:#74b9ff;
		   broder-radius:10px 10px;
		   

}
</style>
</head>
<body>

<
<section class="container grey-text">
<h1 class="center">abonnement</h1><br>
		
	
		
		
		<!--Formulaire-->
		<form name="resa" id="resa" method="POST" action="add.php">
			
			<table id="abonne">
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
				<td><input type="text" name="email" required>
				</td>
			</tr>
			<tr><!--ligne5-->
				<td>Telephone:</td>
				<td><input type="text" name="tele" >
				</td>
			</tr>
			<tr><!--ligne 6: type DATE-->
				<td>date de naissance:</td>
				
				<td>
				<input type="date" name="Ddn"  >
				</td>
			</tr>
			<tr><!--ligne7 liste déroulant-->
				<td>proffision:</td>
				<td><select name="pro" size="4" multiple>
					<option value="-1">Choisissez une proffision.....</option>
					<option value="etudiant">etudiant</option>
					<option value="eleve">eleve</option>
					<option value="travaillant">travaillant</option>
					
				</select>
				</td>
			</tr>
			<tr><!--ligne6 liste déroulant-->
				<td>chemain:</td>
				<td><select name="chem" size="4" multiple>
					<option value="-1">Choisissez le chemain.....</option>
					<option value="gabes centre-gabes sud ">gabes centre-gabes sud </option>
					<option value="gabes centre-gabes nord">gabes centre-gabes nord</option>
					<option value="gabes centre-gabes east">gabes centre-gabes east</option>
					
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