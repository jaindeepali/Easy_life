<?php
	
	//start the session
	session_start();

	//create connection with mysql database
	$con = mysql_connect("localhost","root");
	mysql_select_db('todo');
	//check whether connection is made
	if (!$con){
  	die("Failed to connect to MySQL: " . mysql_error());
  }
  	$login = mysql_query("SELECT * FROM users WHERE (uname = '" . $_POST['name'] . "') and (pwd = '" . $_POST['pass'] . "')");
	//change >=1 to ==1 as as soon as the validation code is written
	if (mysql_num_rows($login)>=1)// remove >
	{
		$_SESSION['name']=$_POST['name'];
		header('Location:index1.php');
	}
	else 
	{	
		header('Location:index.php');
	}
   $sql = "CREATE TABLE users(uname VARCHAR(30) NOT NULL, pwd VARCHAR(30) NOT NULL);";
	mysql_query($sql,$con);
	$uname=$_POST["uname"];
	$pwd=$_POST["pwd"];
	if(isset($_POST['bool'])){
	$sql = "INSERT INTO users VALUES ('".$uname."','".$pwd."');";
	if(mysql_query($sql,$con)){
			$sql1 = "CREATE TABLE ".$uname."1 (serialno INT NOT NULL AUTO_INCREMENT, listitem VARCHAR(30), PRIMARY KEY (serialno));";
			mysql_query($sql1,$con);
			$sql2 = "CREATE TABLE ".$uname."2 (serialno INT NOT NULL AUTO_INCREMENT, listitem VARCHAR(30), PRIMARY KEY (serialno));";
			mysql_query($sql2,$con);
			$sql3 = "CREATE TABLE ".$uname."3 (serialno INT NOT NULL AUTO_INCREMENT, listitem VARCHAR(30), PRIMARY KEY (serialno));";
			mysql_query($sql3,$con);
			$sql4 = "CREATE TABLE ".$uname."4 (serialno INT NOT NULL AUTO_INCREMENT, listitem VARCHAR(30), PRIMARY KEY (serialno));";
			mysql_query($sql4,$con);
		}
	else echo "fail";
	}
?>