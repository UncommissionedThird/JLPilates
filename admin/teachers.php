<?php	
	include "../lib/dbconnect.php";
	

	if(!isset($_GET['edit']) && !isset($_GET['add']) && !isset($_GET['delete'])){
		if(!isset($_POST['submit'])){
			
			###					 ###
			# Show List of Classes #
			###					 ###

			echo "<a href='?page=".$_GET['page']."&add=1' class='admin-link'>Add</a>";

			$query  = mysql_query("SELECT * FROM  `".$_GET['page']."`");

			while ($row = mysql_fetch_array($query)) {
				echo "<div class='admin-title'>".$row['instructor']."</div>";
				echo "<div class='admin-links'><a href='?page=".$_GET['page']."&edit=".$row['id']."' class='admin-edit'>Edit</a></div>";
				echo "<a href='?page=".$_GET['page']."&delete=".$row['id']."' class='admin-delete'>Delete</a></div>";
			}
		}else{
			mysql_query("UPDATE `".$_GET['page']."` SET `instructor`='".$_POST['title']."',`content`='".$_POST['content']."',`photo`='".$_POST['photo']."' WHERE `id`='".$_POST['id']."'");
			mysql_close();
		}

	}else if(isset($_GET['add'])){
		###		    ###
		# Update Form #
		###		    ###

		echo "
		<div class='admin-form'>
			<form method='POST' action='index.php?page=".$_GET['page']."' parsley-validate>
				<input name='id' type='hidden' value='".$id."'>
				<label for='title'>Title: </label><br>
		        <input name='title' type='text' value='".$title."' parsley-trigger='blur' parsley-focus='first' required><br>
		        <label for='photo'>Photo: </label><br>
		        <input name='photo' type='text' value='".$photo."' parsley-trigger='blur' parsley-focus='first' required><br>
		        <label for='content'>Content: </label><br>
		        <textarea name='content' class='input_field_message' parsley-trigger='keyup' parsley-rangelength='[5,250]' parsley-focus='last' required>".$content."</textarea><br>
		        <input name='submit' type='submit' value='Update'>
			</form>
		</div>";

		echo "<a href='?page=".$_GET['page']."' class='admin-back'>Back</a>";
	}else{

			###				   ###
			# Show Class to Edit #
			###				   ###

			$query  = mysql_query("SELECT * FROM  `".$_GET['page']."` WHERE `id`='".$_GET['edit']."'");

			while ( $row = mysql_fetch_array($query) ) {
				$id      = $row['id'];
				$title   = $row['instructor'];
				$content = $row['content'];
				$photo   = $row['photo'];
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
			        <label for='photo'>Photo: </label><br>
			        <input name='photo' type='text' value='".$photo."' parsley-trigger='blur' parsley-focus='first' required><br>
			        <img src='../".$photo."' class='admin-photo'><br>
			        <label for='content'>Content: </label><br>
			        <textarea name='content' class='input_field_message' parsley-trigger='keyup' parsley-rangelength='[5,250]' parsley-focus='last' required>".$content."</textarea><br>
			        <input name='submit' type='submit' value='Update'>
				</form>
			</div>";

			echo "<a href='?page=".$_GET['page']."' class='admin-back'>Back</a>";
	}