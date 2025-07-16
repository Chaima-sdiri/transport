<?php
//connexion
$connexion= mysqli_connect('localhost','root','','abon');

	if (!$connexion){
		echo 'Erreur de connexion: '.mysqli_connect_error();
	}


	//requete
if(isset($_POST['submit'])){
	
	$cin=$_POST['cin'];
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$email=$_POST['email'];
	$tele=$_POST['tele'];
	$Ddn=$_POST['Ddn'];
	$pro=$_POST['pro'];
	$chem=$_POST['chem'];
$sql = "INSERT INTO abonne('cin','nom','prenom','email','tele','Ddn','pro','chem') VALUES('{$cin}','{$nom}','{$prenom}','{$email}',{$tele},{$Ddn},'{$pro}','{$chem}')";
	// save to db and check
	if(mysqli_query($connexion, $sql)){
		// success
		mysqli_close($connexion);
		header("Location: page d'acceuil.php");
	} else {
		mysqli_close($connexion);;
		echo 'query error: '. mysqli_error($connexion);
	}
}
mysqli_close($connexion);
?>


























	include('config/db_connect.php');

	$email = $title = $description = '';
	$errors = array('email' => '', 'title' => '', 'description' => '');

	if(isset($_POST['submit'])){

		// check email
		if(empty($_POST['email'])){
			$errors['email'] = 'An email is required';
		} else{
			$email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$errors['email'] = 'Email must be a valid email address';
			}
		}

		// check title
		if(empty($_POST['title'])){
			$errors['title'] = 'A title is required';
		} else{
			$title = $_POST['title'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
				$errors['title'] = 'Title must be letters and spaces only';
			}
		}

		// check description


		if(array_filter($errors)){
			//echo 'errors in form';
		} else {
			// escape sql chars
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$title = mysqli_real_escape_string($conn, $_POST['title']);
			$description = mysqli_real_escape_string($conn, $_POST['description']);

			// create sql
			$sql = "INSERT INTO books(title,email,description) VALUES('$title','$email','$description')";

			// save to db and check
			if(mysqli_query($conn, $sql)){
				// success
				header('Location: index.php');
			} else {
				echo 'query error: '. mysqli_error($conn);
			}

		}

	} // end POST check

?>

<!DOCTYPE html>
<html>

	<?php include('templates/header.php'); ?>

	<section class="container grey-text">
		<h4 class="center">Add a book</h4>
		<form class="white" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
			<label>Your Email</label>
			<input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
			<div class="red-text"><?php echo $errors['email']; ?></div>
			<label>Book Title</label>
			<input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
			<div class="red-text"><?php echo $errors['title']; ?></div>
			<label>Description </label>
			<input type="text" name="description" value="<?php echo htmlspecialchars($description) ?>">
			<div class="red-text"><?php echo $errors['description']; ?></div>
			<div class="center">
				<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
			</div>
		</form>
	</section>

	<?php include('templates/footer.php'); ?>

</html>

