<?php

  session_start();

  $_SESSION['name'] = 'GCR';


  $name = $_SESSION['name'];

?>

<head>
	<title>Library books</title>
	<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <style type="text/css">
	  .brand{
	  	background: #335c67 !important;
	  }
  	.brand-text{
  		color: #78290f !important;
  	}
  	form{
  		max-width: 460px;
  		margin: 20px auto;
  		padding: 20px;
  	}
    .book{
      width: 100px;
      margin: 40px auto -30px;
      display: block;
      position: relative;
      top: -30px;
    }
  </style>
</head>
<body class="grey lighten-4">
	<nav class="white z-depth-0">
    <div class="container">
      <a href="index.php" class="brand-logo brand-text">Library books</a>
      <ul id="nav-mobile" class="right hide-on-small-and-down">
        <li class="grey-text">Hel000000000000lo <?php echo htmlspecialchars($name); ?></li>
        <li><a href="add.php" class="btn brand z-depth-0">Add a book</a></li>
      </ul>
    </div>
  </nav>
