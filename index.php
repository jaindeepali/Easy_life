<?php
	session_destroy();
	session_start();
	$_SESSION['name']="Guest";
?>
<html>
<head>
	<title>Easy Life</title>
	<link href='http://fonts.googleapis.com/css?family=Molle:400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Patrick+Hand+SC' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="login_script.js"></script>
	<link rel="stylesheet" href="style_login.css"></head>
<body>
	<h1>Easy Life!</h1>
	<h2>Get Things Done!</h2>
<form action="login_code.php" method="post" id="login">
	Username:<input id="txtbox" class="txt" name="name" onClick="this.select();">
	Password:<input id="password" type="password" class="txt" name="pass" onClick="this.select();">
	<input id="btn1" class="btn" type="submit" name="s_in" value="SignIn"><span id="or">OR</span>
	<input id="btn2" class="btn" type="button" value="SignUp">
</form>
<form id="logup">
	Enter your username:<input id="uname" class="txt" onClick="this.select();">
	Enter new password:<input id="pwd" class="txt" type="password" onClick="this.select();">
	Enter password again:<input id="pwd1" class="txt" type="password" onClick="this.select();">
	<input id="btn3" class="btn" type="button" value="SignIn">
	<input id="btn4" class="btn" type="button" value="Cancel">
</form>
</form>
</body>
