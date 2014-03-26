<?php
	ob_start();
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Byoga Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
	<script src="../jquery-1.10.2.js"></script>
	<script src="../js/parsley.js"></script>
	<script src="../js/botboot.js"></script>
	<style>



.clearfix:after {
    content: ".";
    display: block;
    clear: both;
    visibility: hidden;
    line-height: 0;
    height: 0;
}
 
.clearfix {
    display: inline-block;
}
 
html[xmlns] .clearfix {
    display: block;
}
 
* html .clearfix {
    height: 1%;
}



@font-face {
    font-family: 'pacificoregular';
    src: url('../fonts/pacifico-webfont.eot');
    src: url('../fonts/pacifico-webfont.eot?#iefix') format('embedded-opentype'),
         url('../fonts/pacifico-webfont.woff') format('woff'),
         url('../fonts/pacifico-webfont.ttf') format('truetype'),
         url('../fonts/pacifico-webfont.svg#pacificoregular') format('svg');
    font-weight: normal;
    font-style: normal;

}
	* {
		margin:0 auto;
		padding:1em;
		text-align:center !important;
		background-color:#f0f0f0;
		font-family:"Helvetica", sans-serif;
		font-size:1em;
		color:#555 !important;
		text-shadow:1px 1px 0px rgba(0,0,0,.1);
	}

	.container {
		margin:0 auto;
		position:relative;
		width:300px;
		max-width:300px;
		min-width:300px;
		padding:0;
	}
	.container2 {
		margin:0 auto;
		position:relative;
		max-width:1500px;
		min-width:200px;
		background-color: #fff;
		box-shadow:0px 0px 4px rgba(0,0,0,.4);
		padding:0;
		text-align:left !important;
	}
	#logo img {
		width:100%;
		height:auto;
		box-shadow:0px 0px 5px rgba(0,0,0,.3);
		padding:0;
		margin:0 auto 1em auto;
	}
	.admin-login{
		position:relative;
		width:100%;
		max-width:300px;
		margin:0 auto;
		height:auto;
		text-align:left;
	}
	
	.title {
		background-color:rgba(252,98,34,1.0);
		color:#fff;
		width:inherit;
		margin: 0 0em 0 0em;
	}
	label {background-color:transparent;
		color:#fff;
		font-size:1.5em;
		font-weight:bold;}
	.input {
		background-color:#fff;
		color:rgba(75,41,4, 1.0) !important;
		text-shadow:none;
		width:inherit;
		font-size:1.5em;
		margin:0 0 1em 0em;
		text-align:left !important;
		text-indent:.5em;
		padding:.5em 0em;
		border:0;
		box-shadow:0 0 3px rgba(0,0,0,.3);
		border-radius:0 0 5px 5px;
	}

	.button {
		background-color:rgba(252,98,34,1.0);
		border:none;
		width:100%;
		border-radius:10px;
		margin:1em 0 0 0em;
		padding:.5em 4em;
		color:#fff;
		text-align:center !important;
		font-size:1.5em;
		font-weight:200;
		transition:.5s ease-in-out;
		-moz-transition:.25s ease-in-out;
		-ie-transition:.25s ease-in-out;
		-o-transition:.25s ease-in-out;
		-webkit-transition:.25s ease-in-out;
	}
	.button:hover {
		background-color:rgba(232,68,4, 1.0);
		transition:.25s ease-in-out;
		-moz-transition:.25s ease-in-out;
		-ie-transition:.25s ease-in-out;
		-o-transition:.25s ease-in-out;
		-webkit-transition:.25s ease-in-out;
	}
	.button:active {
		background-color:rgba(255,255,255, 1.0);
		color:rgba(252,98,34,1.0);
		box-shadow:inset 1px 1px 2px rgba(0,0,0,.9);
		transition:.15s ease-in-out;
		-moz-transition:.15s ease-in-out;
		-ie-transition:.15s ease-in-out;
		-o-transition:.15s ease-in-out;
		-webkit-transition:.15s ease-in-out;
}

	.menu {
		display:inline;
		width:250px;
		float:left;
		margin:0 auto;
		list-style:none;
		color:#fff;
		padding:.5em 4em;
		font-family:"pacificoregular", sans-serif;
	}
	.menu li {
		background-color:transparent;
		top:0;
		color:#fff;
		margin:0;
		width:250px;
	}
	.menu li a{
		border-bottom:2px solid rgba(0,0,0,.3);
		background-color:#fff;
		width:250px;
		color:#555;
		float:left;
		font-weight:900;
		text-decoration: none;
		transition:.5s ease-in-out;
		-ie-transition:.5s ease-in-out;
		-moz-transition:.5s ease-in-out;
		-wekit-transition:.5s ease-in-out;
		-o-transition:.5s ease-in-out;
		margin:.5em 0;
	}

	.menu li a:hover {
		background-color:rgba(252,98,34,1.0);
		color:#fff !important;
		font-weight:900;
		transition:.5s ease-in-out;
		-ie-transition:.5s ease-in-out;
		-moz-transition:.5s ease-in-out;
		-wekit-transition:.5s ease-in-out;
		-o-transition:.5s ease-in-out;
	}
	.no-style li a:focus {
		box-shadow:inset 1px 1px 1px rgba(0,0,0,.8);
	}
	.context {
		position:relative;
		float:left;
		text-align:left !important;
		display:inline;
		width:750px;
		padding:1em;
		border:1px solid #ddd;
		top:0;
	}
	.input_field_message {
		float:left;
		text-align:left;
		width:90%;
		background-color:#fff;
		margin-bottom: 1em;
	}
	.logout {
		position:fixed;
		top:3em;
		right:3em;
		border-radius:4px;
		width:100px;
		background-color:#fff;
		text-decoration: none;
		font-weight:900 !important;
		box-shadow:1px 1px 1px rgba(0,0,0,.2);
		transition:.5s ease-in-out;
		-ie-transition:.5s ease-in-out;
		-moz-transition:.5s ease-in-out;
		-wekit-transition:.5s ease-in-out;
		-o-transition:.5s ease-in-out;
	}
	.logout:hover {
		background-color:rgba(252,98,34,1.0);
		color:#fff !important;
		font-weight:900 !important;
		box-shadow:1px 1px 1px rgba(0,0,0,.5);
		transition:.5s ease-in-out;
		-ie-transition:.5s ease-in-out;
		-moz-transition:.5s ease-in-out;
		-wekit-transition:.5s ease-in-out;
		-o-transition:.5s ease-in-out;
	}
	.logout:active {
		box-shadow:inset 1px 1px 1px rgba(0,0,0,.8);
	}
	.admin-page-title {
		display:none;
	}
	.admin-title {
		background-color:transparent;
		color:#555;
		font-size:1.5em;
		box-shadow: 0px 0px 0px rgba(0,0,0,.4);
	}
	.admin-form {
		background-color:transparent;
	}
	.admin-back {
		position:fixed;
		right:3em;
		top:10em;
		border-radius:4px;
		width:100px;
		background-color:#fff;
		text-decoration: none;
		box-shadow:0 0 3px rgba(0,0,0,.2);
		transition:.5s ease-in-out;
		-ie-transition:.5s ease-in-out;
		-moz-transition:.5s ease-in-out;
		-wekit-transition:.5s ease-in-out;
		-o-transition:.5s ease-in-out;
	}
	.admin-back:hover {
		background-color:rgba(252,98,34,1);
		color:#fff;
		box-shadow:1px 1px 1px rgba(0,0,0,.5);
		transition:.5s ease-in-out;
		-ie-transition:.5s ease-in-out;
		-moz-transition:.5s ease-in-out;
		-wekit-transition:.5s ease-in-out;
		-o-transition:.5s ease-in-out;
	}
	.admin-back:active {
		box-shadow:inset 1px 1px 1px rgba(0,0,0,.8);
	}
	label {
		margin:0 !important;
	}
	</style>
</head>
<body>

	<div class="container">
	<div id="logo"><img src="../img/byoga.png"/></div>
	</div>

<?php
	include "../lib/remove-injections.php";
	$admin_url = "http://byoga.jemiloii.com/admin/";
	
	$form = '
	<div class="admin-login">
		<form method="POST" action="index.php" parsley-validate>

			
			<div class="title"><label for="email">Email</label>	</div>
			<input class="input" name="email" type="email" placeholder="your email" parsley-trigger="blur" parsley-focus="first" required><br>
		
			
	        <div class="title"><label for="password">Password</label></div>
	        <input class="input" name="password" type="password" placeholder="your password" parsley-trigger="blur" parsley-focus="first" required><br>
	        
	        <div class="title"><script>DrawBotBoot();</script></div><br>
	        <input class="button" name="submit" type="submit" value="Login">
		</form>
	</div>
	</div>';
	if(isset($_SESSION['flash'])){
		echo $_SESSION['flash'];
		$_SESSION['flash'] = NULL;
	}
	if(!isset($_SESSION['admin']) || !isset($_SESSION['key'])){
		//Login Form
		if(!isset($_POST['submit'])){
			if($_GET['logout'] === "1"){
				echo "Logout Successful!";
			}
			//Show Form
			echo $form;
		}else{
			//CONNECT TO DATABASE
			include "../lib/dbconnect.php";

			//SET SALT AND ENCRYPT
			$md5_salt = "WaVaMeDiA _ §500§";
			$md5_pass = md5($_POST['password'].$md5_salt);
			echo $md5_pass.$_POST['email'];

			$checkLoginFormData = mysql_query("SELECT `email`,`password` FROM `admin` WHERE `email`='".$_POST['email']."' AND `password`='".$md5_pass."'") or die(mysql_error());

			if(!$checkLoginFormData){
				//IF USER IS NOT FOUND CLOSE DATABASE CONNECTION AND ECHO FORM WITH ERROR MESSAGE
				mysql_close();
				$_SESSION['flash'] = "Email or Password is not correct!";
				echo $form;
			}else{
				//IF USER IS FOUND, CREATE SESSION VARIABLES
				$key = md5(date(M-D-Y).$_POST['email'].$md5_pass);
				$_SESSION['admin']   =    md5($_POST['email']);
				$_SESSION['key']     =    $key;
				echo $_SESSION['admin']." Key:".$_SESSION['key'];
				//PUT KEY INTO DATABASE
				mysql_query("UPDATE `admin` SET `key`='".$key."' WHERE `email`='".$_POST['email']."'") or die(mysql_error());
				$_SESSION['flash'] = "Success!";

				//CLOSE DATABASE CONNECTION
				mysql_close();

				//Refresh
				header("Location: ".$admin_url."index.php");
			}

		}

	}else{
		//CONNECT TO DATABASE
		include "../lib/dbconnect.php";
		//CHECK SESSION VARIABLES AGAINST THE DATABASE
		$query = mysql_query("SELECT `email` FROM `admin` WHERE `key`='".$_SESSION['key']."'") or die(mysql_error());

		if($query){
			$numrow     = mysql_fetch_array($query);
			$md5email   = md5($numrow[0]);
			if($_SESSION['admin'] === $md5email){
				mysql_close();
				$_SESSION['flash'] = "Logged In!";
				$_SESSION['page'] = 'panel';
				include "panel.php";

			}else{	
			//IF SESSION ADMIN DOES NOT EQUAL MD5 EMAIL HASH CLOSE DATABASE CONNECTION
			mysql_close();
			$_SESSION['flash'] = "You need to login! Admin";
			echo $form;	
			}
		}else{	
			//IF SESSION KEY IS NOT FOUND CLOSE DATABASE CONNECTION
			mysql_close();
			$_SESSION['flash'] = "You need to login! Key";
			echo $form;	
		}
	}
?>