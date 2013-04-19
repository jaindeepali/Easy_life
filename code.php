<?php
	session_start();
	$con = mysql_connect("localhost","root");

	//check whether connection is made
	if (!$con){
  	die("Failed to connect to MySQL: " . mysql_error());
  }

  //use database todo_list
  mysql_select_db('todo');
  function data ($table){
  	$sql="SELECT * FROM ".$table.";";
  	global $con;
  	$query=mysql_query($sql,$con);
  	$data="";
  	while($item=mysql_fetch_array($query)){
  		$id=$item['serialno'];
  		$li=$item['listitem'];
  		$line='<li><span id='.$id.'>'.$li.'</span><input class="done" type="submit" value="Done"><button class="do_button" type="submit" value="Delete">Delete</button></li>';
  		$data=$data.$line."\n";
  	}
  	return $data;
  }
  if($_GET['do_delete']!="")
	{
		$no=$_GET['do_delete'];
		$sql = "DELETE FROM ".$_SESSION["name"]."1 WHERE serialno='".$no."';";
		if(mysql_query($sql,$con)){
			echo "success";
		}
		else{
			echo "fail";
		}
	}
  if($_GET['read_delete']!="")
	{
		$no=$_GET['read_delete'];
		$sql = "DELETE FROM ".$_SESSION["name"]."2 WHERE serialno='".$no."';";
		if(mysql_query($sql,$con)){
			echo "success";
		}
		else{
			echo "fail";
		}
	}
  if($_GET['watch_delete']!="")
	{
		$no=$_GET['watch_delete'];
		$sql = "DELETE FROM ".$_SESSION["name"]."3 WHERE serialno='".$no."';";
		if(mysql_query($sql,$con)){
			echo "success";
		}
		else{
			echo "fail";
		}
	}
  if($_GET['visit_delete']!="")
	{
		$no=$_GET['visit_delete'];
		$sql = "DELETE FROM ".$_SESSION["name"]."4 WHERE serialno='".$no."';";
		if(mysql_query($sql,$con)){
			echo "success";
		}
		else{
			echo "fail";
		}
	}
  if($_GET["addtodo"]!="")
	{
		$item = mysql_real_escape_string($_GET['addtodo']);
		$uname = $_SESSION["name"]."1";
		$sql = "INSERT INTO ".$uname."(listitem) VALUES ('".$item."');";
		$check = mysql_query($sql,$con);
		if($check){
			echo data($uname);
		}
	}
  if($_GET["addtoread"]!="")
	{
		$item = mysql_real_escape_string($_GET['addtoread']);
		$uname = $_SESSION["name"]."2";
		$sql = "INSERT INTO ".$uname."(listitem) VALUES ('".$item."');";
		$check = mysql_query($sql,$con);
		if($check){
			echo data($uname);
		}
	}
  if($_GET["addtowatch"]!="")
	{
		$item = mysql_real_escape_string($_GET['addtowatch']);
		$uname = $_SESSION["name"]."3";
		$sql = "INSERT INTO ".$uname."(listitem) VALUES ('".$item."');";
		$check = mysql_query($sql,$con);
		if($check){
			echo data($uname);
		}
	}
  if($_GET["addtovisit"]!="")
	{
		$item = mysql_real_escape_string($_GET['addtovisit']);
		$uname = $_SESSION["name"]."4";
		$sql = "INSERT INTO ".$uname."(listitem) VALUES ('".$item."');";
		$check = mysql_query($sql,$con);
		if($check){
			echo data($uname);
		}
	}
?>