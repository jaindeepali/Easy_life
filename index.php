<html>
<head>
	<title>to do app</title>
	<link href='http://fonts.googleapis.com/css?family=Molle:400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Patrick+Hand+SC' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<!--header-->
	<div id="header">
		<img src="bird.jpg" id="bg">
		<b><a href="#">Easy Life!</a></b><br>
		Catch up with your life now!<br>
		<b>Welcome, <?php echo $_GET["name"]; ?></b><br>	
		<form action="login.php">
		<input type="submit" value="Logout" id="logout">
	</form>
	<form action="index.php" method="get" id="form"></form>
	</div>
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
			$data="\n".'<li>'.$_GET["addtodo"].'<input class="done" type="submit" value="Done"><button class="button" type="submit" value="Delete" name="delete" form="form">Delete</button></li>';
			fwrite($file, $data);
		}
		fclose($file);
		?>
		<?php
		if($_GET['delete']!="")
		{
		        $line='<li>'.$_GET['delete'].'<input class="done" type="submit" value="Done"><button class="button" type="submit" value="Delete" name="delete" form="form">Delete</button></li>';
		        $contents = file_get_contents("todo.txt");
		        $contents = str_replace($line, '', $contents);
		        file_put_contents("todo.txt", $contents);
		    }
		 ?>
		 <?php
		 	echo file_get_contents("todo.txt");
		 ?>
		<form>
			<input name="addtodo" type="text"><input type="submit" class="addtask" value="Add task" onClick="ajaxFunction();">
		</form>
	</ul>
</div>
<div id="cat2cont">
	<ul>
		<?php
		$file = fopen("toread.txt", "a") or exit("Unable to open file!");
		//write form data to file
		if($_GET["addtoread"]!="")
		{
			$data="\n".'<li>'.$_GET["addtoread"].'<input class="done" type="submit" value="Done"><button class="button" type="submit" value="Delete" name="delete" form="form">Delete</button></li>';
			fwrite($file, $data);
		}
		fclose($file);
		?>
		<?php
		if($_GET['delete']!="")
		{
		        $line='<li>'.$_GET['delete'].'<input class="done" type="submit" value="Done"><button class="button" type="submit" value="Delete" name="delete" form="form">Delete</button></li>';
		        $contents = file_get_contents("toread.txt");
		        $contents = str_replace($line, '', $contents);
		        file_put_contents("toread.txt", $contents);
		    }
		 ?>
		 <?php
		 	echo file_get_contents("toread.txt");
		 ?>
		<form>
			<input type="text" name="addtoread"><input type="submit" class="addtask" value="Add task" onClick="ajaxFunction();">
		</form>
	</ul>
</div>
<div id="cat3cont">
	<ul>
		<?php
		$file = fopen("towatch.txt", "a") or exit("Unable to open file!");
		//write form data to file
		if($_GET["addtowatch"]!="")
		{
			$data="\n".'<li>'.$_GET["addtowatch"].'<input class="done" type="submit" value="Done"><button class="button" type="submit" value="Delete" name="delete" form="form">Delete</button></li>';
			fwrite($file, $data);
		}
		fclose($file);
		?>
		<?php
		if($_GET['delete']!="")
		{
		        $line='<li>'.$_GET['delete'].'<input class="done" type="submit" value="Done"><button class="button" type="submit" value="Delete" name="delete" form="form">Delete</button></li>';
		        $contents = file_get_contents("towatch.txt");
		        $contents = str_replace($line, '', $contents);
		        file_put_contents("towatch.txt", $contents);
		    }
		 ?>
		 <?php
		 	echo file_get_contents("towatch.txt");
		 ?>
		<form>
			<input type="text" name="addtowatch"><input type="submit" class="addtask" value="Add task" onClick="ajaxFunction();">
		</form>
	</ul>
</div>
<div id="cat4cont">
	<ul>
		<?php
		$file = fopen("tovisit.txt", "a") or exit("Unable to open file!");
		//write form data to file
		if($_GET["addtovisit"]!="")
		{
			$data="\n".'<li>'.$_GET["addtovisit"].'<input class="done" type="submit" value="Done"><button class="button" type="submit" value="Delete" name="delete" form="form">Delete</button></li>';
			fwrite($file, $data);
		}
		fclose($file);
		?>
		<?php
		if($_GET['delete']!="")
		{
		        $line='<li>'.$_GET['delete'].'<input class="done" type="submit" value="Done"><button class="button" type="submit" value="Delete" name="delete" form="form">Delete</button></li>';
		        $contents = file_get_contents("tovisit.txt");
		        $contents = str_replace($line, '', $contents);
		        file_put_contents("tovisit.txt", $contents);
		    }
		 ?>
		<?php
			echo file_get_contents("tovisit.txt");
		?>
		<form>
			<input type="text" name="addtovisit"><input type="submit" class="addtask" value="Add task" onClick="ajaxFunction();">
		</form>
	</ul>
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	$("#cat1cont").siblings().hide();
			$("#cat1cont").show();
		$("#cat1").click(function(){
			$("#cat1cont").siblings().hide();
			$("#cat1cont").show();
			});
		$("#cat2").click(function(){
			$("#cat2cont").siblings().hide();
			$("#cat2cont").show();
			});
		$("#cat3").click(function(){
			$("#cat3cont").siblings().hide();
			$("#cat3cont").show();
			});
		$("#cat4").click(function(){
			$("#cat4cont").siblings().hide();
			$("#cat4cont").show();
			});
		$(".done").click(function(){
			if($(this).parent().hasClass("strike"))
			{
				$(this).attr('value',"Done");
				$(this).parent().removeClass("strike");
			}
			else
			{
				$(this).attr('value',"Not Done");
				$(this).parent().addClass("strike");
			}
		});
		$(".button").click(function(){
			var text=$(this).parent().text();
			text = text.split('Delete')[0];
			$(this).attr('value',text);
		});
		});	
</script>
<script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Molle:400italic:latin' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); </script>
  <script language="javascript" type="text/javascript">
  <!-- 
  //Browser Support Code
  function ajaxFunction(){
  	var ajaxRequest;  // The variable that makes Ajax possible!
  	
  	try{
  		// Opera 8.0+, Firefox, Safari
  		ajaxRequest = new XMLHttpRequest();
  	} catch (e){
  		// Internet Explorer Browsers
  		try{
  			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
  		} catch (e) {
  			try{
  				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
  			} catch (e){
  				// Something went wrong
  				alert("Your browser broke!");
  				return false;
  			}
  		}
  	}
  	ajaxRequest.open("GET", "index.php", true);
  	ajaxRequest.send(null); 
  	ajaxRequest.onreadystatechange = function(){
  			if(ajaxRequest.readyState == 4){
  			}
  		}
  }

  //-->
  </script>
</body>
</html>

