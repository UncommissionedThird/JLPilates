    <script>
    	// Add Class active to Current URL page that matches Link URL
    	$(document).ready(function(){
    		var path = location.pathname.substr(1);
    		var hash = location.hash;

    		if(hash === false && hash === 'undefined'){
    			hash = "";
    		}

    		$('nav ul li a').removeClass('active');
    		$("nav ul li a[href='" + path + hash + "']").addClass('active');
    	});
    </script>

    <!-- Top Nav -->
    <nav class="top-menu">
    	<ul class="top-menu-gradient">
	        <li><a class="logo" href="index.php#top"></a>
	        </li>
	        <li><a href="index.php#mission">Mission</a>
	        </li>
	        <li><a href="index.php#about">About</a>
	        </li>
	        <li><a href="classes.php">Classes</a>
	        </li>
	        <li><a href="schedule.php">Schedule</a>
	        </li>
	        <li><a href="teachers.php">Teachers</a>
	        </li>
	        <li><a href="contact.php">Contact</a>
	        </li>
	    </ul>
    </nav>
    <!-- /Top Nav -->

    <!-- Side Menu -->
    <a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand"><a href="http://byogachicago.com/">B Yoga Chicago</a>
            </li>
            <li><a href="index.php#top">Home</a>
		    </li>
		    <li>
		    <li><a href="index.php#mission">Mission</a>
		    </li>
	        <li><a href="index.php#about">About</a>
	        </li>
		    <li><a href="classes.php">Classes</a>
	        </li>
	        <li><a href="schedule.php">Schedule</a>
	        </li>
		    <li><a href="teachers.php">Teachers</a>
		    </li>
		    <li><a href="contact.php">Contact</a>
		    </li>
		    </ul>
    </nav>
    <!-- /Side Menu -->