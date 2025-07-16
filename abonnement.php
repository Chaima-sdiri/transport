
<?php

	if(isset($_POST['submit'])){

		//cookie for gender
		setcookie('gender', $_POST['gender'], time() + 86400);

		session_start();

		$_SESSION['name'] = $_POST['name'];

		header('Location: index.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>location</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>
<body>

	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		<input type="text" name="nom">
		<input type="text" name="prenom">
		<input type="text" name="date de naissance">
		<input type="int" name="nb_jours">
		<select name="choisir bus">
			<option value="male">mini bus</option>
			<option value="female">grand bus</option>
		</select>
		<input type="submit" name="submit" value="submit">
	</form>

</body>
</html>


