<?php
	session_destroy();

	header("Location: ".$admin_url."?logout=1");
?>