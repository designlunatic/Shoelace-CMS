<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Alexandre Smirnov - Admin</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="css/style.css">

	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">

	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>

<body>

<section class="container" id="login-page-container">

	<div class="row">

	<section class="span8 offset2">


<div class="row">
		<div class="span6 offset1">

<?php

session_start();

if (isset($_GET['action'])) {
$action = $_GET['action'];
}
else {
$action = '';
}

if($action=='error'){

?>
<div class="alert alert-error">


<a class="close" data-dismiss="alert">&times;</a>
Wrong info.

</div>


<?php

}
if($action=='loggedout'){

?>

<div class="alert alert-success">


<a class="close" data-dismiss="alert">&times;</a>
Logged out.

</div>

<?php

}
if($action=='notallowed'){

?>

<div class="alert alert-error">


<a class="close" data-dismiss="alert">&times;</a>
Not allowed.

</div>

<?php

}
?>

<form method="POST" action="scripts/loginauth.php"">

<div class="row">

<div class="span4 offset1">
<input type="text" name="user" class="span4" placeholder="Username">
<input type="password" name="pass" class="span4" placeholder="Password">

<input type="submit" class="btn pull-right">

</div>
</div>
</form>


<?php include "footer.php"; ?>