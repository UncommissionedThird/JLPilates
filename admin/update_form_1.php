<?php	
	include "../lib/dbconnect.php";
	

	if(!isset($_GET['edit'])){
		if(!isset($_POST['submit'])){
			
			###					 ###
			# Show List of Classes #
			###					 ###

			$query  = mysql_query("SELECT * FROM  `".$_GET['page']."`");

			while ($row = mysql_fetch_array($query)) {
				echo "<div class='admin-title'>".$row['title']."</div>";
				echo "<div class='admin-links'><a href='?page=".$_GET['page']."&edit=".$row['id']."' class='admin-edit'>Edit</a></div>";
			}
		}else{
			mysql_query("UPDATE `".$_GET['page']."` SET `title`='".$_POST['title']."',`content`='".$_POST['content']."' WHERE `id`='".$_POST['id']."'");
			mysql_close();
		}

	}else{

			###				   ###
			# Show Class to Edit #
			###				   ###

			$query  = mysql_query("SELECT * FROM  `".$_GET['page']."` WHERE `id`='".$_GET['edit']."'");

			while ( $row = mysql_fetch_array($query) ) {
				$id      = $row['id'];
				$title   = $row['title'];
				$content = $row['content'];
			}

			###		    ###
			# Update Form #
			###		    ###

			echo "
			<div class='admin-form'>
				<form method='POST' action='index.php?page=".$_GET['page']."' parsley-validate>
					<input name='id' type='hidden' value='".$id."'>
					<label for='title'>Title: </label><br>
			        <input name='title' type='text' value='".$title."' parsley-trigger='blur' parsley-focus='first' required><br>
			        <label for='content'>Content: </label><br>
			        <textarea name='content' class='input_field_message' parsley-trigger='keyup' parsley-rangelength='[5,4000]' parsley-focus='last' required>".$content."</textarea><br>
			        <input name='submit' type='submit' value='Update'>
				</form>
			</div>";

			echo "<a href='?page=".$_GET['page']."' class='admin-back'>Back</a>";
	}