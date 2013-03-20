<?php 
	if($_GET['do_delete']!="")
		{
		        $line='<li>'.$_GET['do_delete'].'<input class="done" type="submit" value="Done"><button class="do_button" type="submit" value="Delete" name="do_delete">Delete</button></li>';
		        $contents = file_get_contents("todo.txt");
		        $contents = str_replace($line, '', $contents);
		        file_put_contents("todo.txt", $contents);
		    }
		    
?>
<?php 
	if($_GET['read_delete']!="")
		{
		        $line='<li>'.$_GET['read_delete'].'<input class="done" type="submit" value="Done"><button class="read_button" type="submit" value="Delete" name="read_delete">Delete</button></li>';
		        $contents = file_get_contents("toread.txt");
		        $contents = str_replace($line, '', $contents);
		        file_put_contents("toread.txt", $contents);
		    }
		    
?>
<?php 
	if($_GET['watch_delete']!="")
		{
		        $line='<li>'.$_GET['watch_delete'].'<input class="done" type="submit" value="Done"><button class="watch_button" type="submit" value="Delete" name="watch_delete">Delete</button></li>';
		        $contents = file_get_contents("towatch.txt");
		        $contents = str_replace($line, '', $contents);
		        file_put_contents("towatch.txt", $contents);
		    }
		    
?>
<?php 
	if($_GET['visit_delete']!="")
		{
		        $line='<li>'.$_GET['visit_delete'].'<input class="done" type="submit" value="Done"><button class="visit_button" type="submit" value="Delete" name="visit_delete">Delete</button></li>';
		        $contents = file_get_contents("tovisit.txt");
		        $contents = str_replace($line, '', $contents);
		        file_put_contents("tovisit.txt", $contents);
		    }
		    
?>
