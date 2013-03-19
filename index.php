<?php
session_start();
if($_GET["name"]=="deepali")
{
	$_SESSION['name'] = "deepali";
}
else{
	$_SESSION['name'] = "guest";
}
//	echo "session started for ".$_SESSION['name'];
?>
<html>
<head>
	<title>to do app</title>
	<link href='http://fonts.googleapis.com/css?family=Molle:400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Patrick+Hand+SC' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<!--header-->
	<div id="header">
		<img src="bird.jpg" id="bg">
		<b><a href="#">Easy Life!</a></b><br>
		Catch up with your life now!<br>
		<b>Welcome, <?php if(isset($_SESSION['name']))
						echo $_SESSION['name']; ?></b><br>	
		<form action="login.php">
		<input type="submit" value="Logout" id="logout">
	</form>
	<!--<form action="index.php" method="get" id="form"></form>
	</div>-->
	<div id="list">
		<span id="cat1"><h2>To do</h2></span>
		<span id="cat2"><h2>To read</h2></span>
		<span id="cat3"><h2>To watch</h2></span>
		<span id="cat4"><h2>To visit</h2></span>
	</div>
<!--content-->
<div class="content">
	<div id="cat1cont">
	<ul>
		<?php
		$file = fopen("todo.txt", "a") or exit("Unable to open file!");
		//write form data to file
		if($_GET["addtodo"]!="")
		{
			$data="\n".'<li>'.$_GET["addtodo"].'<input class="done" type="submit" value="Done"><button class="do_button" type="submit" value="Delete" name="do_delete">Delete</button></li>';
			fwrite($file, $data);
		}
		fclose($file);
		
		 	echo file_get_contents("todo.txt");
		 ?>
		 </ul>
		<form>
			<input name="addtodo" type="text"><input type="submit" class="addtask" value="Add task">
		</form>
	
</div>
<div id="cat2cont">
	<ul>
		<?php
		$file = fopen("toread.txt", "a") or exit("Unable to open file!");
		//write form data to file
		if($_GET["addtoread"]!="")
		{
			$data="\n".'<li>'.$_GET["addtoread"].'<input class="done" type="submit" value="Done"><button class="read_button" type="submit" value="Delete" name="read_delete">Delete</button></li>';
			fwrite($file, $data);
		}
		fclose($file);
		 	echo file_get_contents("toread.txt");
		 ?>
		 </ul>
		<form>
			<input type="text" name="addtoread"><input type="submit" class="addtask" value="Add task">
		</form>
	
</div>
<div id="cat3cont">
	<ul>
		<?php
		$file = fopen("towatch.txt", "a") or exit("Unable to open file!");
		//write form data to file
		if($_GET["addtowatch"]!="")
		{
			$data="\n".'<li>'.$_GET["addtowatch"].'<input class="done" type="submit" value="Done"><button class="watch_button" type="submit" value="Delete" name="watch_delete">Delete</button></li>';
			fwrite($file, $data);
		}
		fclose($file);
		
		 	echo file_get_contents("towatch.txt");
		 ?>
		 </ul>
		<form>
			<input type="text" name="addtowatch"><input type="submit" class="addtask" value="Add task">
		</form>
	
</div>
<div id="cat4cont">
	<ul>
		<?php
		$file = fopen("tovisit.txt", "a") or exit("Unable to open file!");
		//write form data to file
		if($_GET["addtovisit"]!="")
		{
			$data="\n".'<li>'.$_GET["addtovisit"].'<input class="done" type="submit" value="Done"><button class="visit_button" type="submit" value="Delete" name="visit_delete">Delete</button></li>';
			fwrite($file, $data);
		}
		fclose($file);
		
			echo file_get_contents("tovisit.txt");
		?>
		</ul>
		<form>
			<input type="text" name="addtovisit"><input type="submit" class="addtask" value="Add task">
		</form>
	
</div>
</div>

</body>
</html>

