<!--
	###                   ###
	# This is just an admin #
	# panel where they edit #
	# their website content #
	#    					#
	# Mike go design anyway #
	# you that would easy 4 #
	# yoga girls.           #
	#						#
	# I just like how this  #
	# looks so I'm typing   #
	# another block for the #
	# hell of it! -JemiloII #
	# DONE-mike{also}michael#
	###                   ###
-->
<div class="cleafix"></div>
<nav class="container2">
	<ul class="menu">
		<li><a href="?page=about">About</a>
		</li>
		<li><a href="?page=mission">Mission</a>
		</li>
		<li><a href="?page=classes">Classes</a>
		</li>
		<li><a href="?page=pricing">Pricing</a>
		</li>
		<li><a href="?page=paralax">Parallax</a>
		</li>
		<li><a href="?page=teachers">Teachers</a>
		</li>
	</ul>
</nav>
<a href="?page=logout" class="logout">Logout</a>
<div class="clearfix"></div>
<section class="context">
	<?php
		if(isset($_GET['page'])){
			echo "<h1 class='admin-page-title'>".$_GET['page']."</h1>";
			include $_GET['page'].".php";
			
		}else{
			//This is the home admin page

		}
	?>

</section>
</body>
</html>