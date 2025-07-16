<?php

	if(isset($_POST['submit'])){

		//cookie for gender
		setcookie('gender', $_POST['gender'], time() + 86400);

		session_start();

		$_SESSION['name'] = $_POST['name'];

		header("Location: paged'accueil.php");
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>php tuts</title>
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

	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		<input type="text" name="name">
		<select name="gender">
			<option value="male">male</option>
			<option value="female">female</option>
		</select>
		<input type="submit" name="submit" value="submit">
	</form>

</body>
</html>