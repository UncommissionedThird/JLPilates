<?php
if(!isset($_SESSION)) {
     session_start();
}

// Protect POSTS from Injection
foreach ($_POST as $k => $v) {                  
  if(!is_array($_POST[$k]) ) { 
      if (ini_get('magic_quotes_gpc')) {      
            $v = stripslashes($v); 
        }               

        $v = preg_replace('/<.*>/', "", "$v"); //replaces html chars
        $_POST[$k]= mysql_real_escape_string(trim($v));
    }
}

// Protect GETS from Injection
foreach ($_GET as $k => $v) {                  
  if(!is_array($_GET[$k]) ) { 
      if (ini_get('magic_quotes_gpc')) {      
            $v = stripslashes($v); 
        }               

        $v = preg_replace('/<.*>/', "", "$v"); //replaces html chars
        $_GET[$k]= mysql_real_escape_string(trim($v));
    }
}

// Protect SESSIONS from Injection
foreach ($_SESSION as $k => $v) {                  
  if(!is_array($_SESSION[$k]) ) { 
      if (ini_get('magic_quotes_gpc')) {      
            $v = stripslashes($v); 
        }               

        $v = preg_replace('/<.*>/', "", "$v"); //replaces html chars
        $_SESSION[$k]= mysql_real_escape_string(trim($v));
    }
}

// Protect COOKIES from Injection
foreach ($_COOKIE as $k => $v) {                  
  if(!is_array($_COOKIE[$k]) ) { 
      if (ini_get('magic_quotes_gpc')) {      
            $v = stripslashes($v); 
        }               

        $v = preg_replace('/<.*>/', "", "$v"); //replaces html chars
        $_COOKIE[$k]= mysql_real_escape_string(trim($v));
    }
}