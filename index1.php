<?php
	session_start();
	$con = mysql_connect("localhost","root");

	//check whether connection is made
	if (!$con){
  	die("Failed to connect to MySQL: " . mysql_error());
  }

  //use database todo_list
  mysql_select_db('todo');
?>
<html>
<head>
	<title>Easy Life</title>
	<link href='http://fonts.googleapis.com/css?family=Molle:400italic' rel='stylesheet' type='text/css'>
	<ink href='http://fonts.googleapis.com/css?family=Patrick+Hand+SC' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
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
								echo $_SESSION['name']; 
						  if($_SESSION['name']=="Guest")
						  		echo "<br>Please login to use the app."
					?></b><br>	
		<form action="index.php">
			<input type="submit" value=<?php if($_SESSION['name']=="Guest")
												echo "Login";
											 else 
											 	echo "Logout";?> id="logout">
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
			$table=$_SESSION['name']."1";
  			$sql="SELECT * FROM ".$table.";";
  			global $con;
  			$query=mysql_query($sql,$con);
  			$data="";
  			while($item=mysql_fetch_array($query)){
  				$id=$item['serialno'];
  				$li=$item['listitem'];
  				$line='<li><span id='.$id.'>'.$li.'</span><input class="done" type="submit" value="Done"><button class="do_button" type="submit" value="Delete" name="do_delete">Delete</button></li>';
  				$data=$data.$line."\n";
	  		}
	  		echo $data;
		?>
	</ul>
	<input name="addtodo" type="text"><input type="submit" class="addtask" value="Add task">
</div>
<div id="cat2cont">
	<ul>
		<?php
			$table=$_SESSION['name']."2";
  			$sql="SELECT * FROM ".$table.";";
  			global $con;
  			$query=mysql_query($sql,$con);
  			$data="";
  			while($item=mysql_fetch_array($query)){
  				$id=$item['serialno'];
  				$li=$item['listitem'];
  				$line='<li><span id='.$id.'>'.$li.'</span><input class="done" type="submit" value="Done"><button class="do_button" type="submit" value="Delete" name="do_delete">Delete</button></li>';
  				$data=$data.$line."\n";
	  		}
	  		echo $data;
		?>
	</ul>
	<input type="text" name="addtoread"><input type="submit" class="addtask" value="Add task">
</div>
<div id="cat3cont">
	<ul>
		<?php
			$table=$_SESSION['name']."3";
  			$sql="SELECT * FROM ".$table.";";
  			global $con;
  			$query=mysql_query($sql,$con);
  			$data="";
  			while($item=mysql_fetch_array($query)){
  				$id=$item['serialno'];
  				$li=$item['listitem'];
  				$line='<li><span id='.$id.'>'.$li.'</span><input class="done" type="submit" value="Done"><button class="do_button" type="submit" value="Delete" name="do_delete">Delete</button></li>';
  				$data=$data.$line."\n";
	  		}
	  		echo $data;
		?>
	</ul>
	<input type="text" name="addtowatch"><input type="submit" class="addtask" value="Add task">
</div>
<div id="cat4cont">
	<ul>
		<?php
			$table=$_SESSION['name']."4";
  			$sql="SELECT * FROM ".$table.";";
  			global $con;
  			$query=mysql_query($sql,$con);
  			$data="";
  			while($item=mysql_fetch_array($query)){
  				$id=$item['serialno'];
  				$li=$item['listitem'];
  				$line='<li><span id='.$id.'>'.$li.'</span><input class="done" type="submit" value="Done"><button class="do_button" type="submit" value="Delete" name="do_delete">Delete</button></li>';
  				$data=$data.$line."\n";
	  		}
	  		echo $data;
		?>
	</ul>
	<input type="text" name="addtovisit"><input type="submit" class="addtask" value="Add task">
</div>
</div>

</body>
</html>

