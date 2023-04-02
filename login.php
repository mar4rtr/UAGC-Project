<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Log On</title>
</head>
<body>
	<h1>Log Into Account</h1>
</body>
<body>
<div>
	<a href="landpage.php">Return to Home Page</a>
	</div>
</body>
<form action= "once_loggedin.php" method="post">
<form action="database.php" method="POST">
    <h2>LOGIN</h2>
	<?php if (isset($_GET['error'])) { ?>
		<p class="error"><?php echo $_GET['error']; ?> </p>
		<?php 
	} ?>

    <label> User Name</label>
    <input type="text" name="Usname" placeholder="Enter Email">

    <label> Password</label>
    <input type="text" name="paswrd" placeholder="Enter Password">

    <button type="submit">Login</button>
</form>
</html>