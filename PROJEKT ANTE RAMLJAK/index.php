<?php
	define('__APP__', TRUE);
	
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
    session_start();

	include ("dbconn.php");
	
    if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
	if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }
	
    if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }
	
	if (!isset($menu)) { $menu = 1; }
	
    include_once("functions.php");
print '
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0; maximum-scalable=0;user-scalable=0;">
    <meta name="description" content="Proffesional web ">
    <meta name="keywords" content="Web programmer,proffesional web,web ">
    <meta name="author" content="Ante Ramljak">
    <title>Moj projekt | Dobro dosli</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="./css/dizajn.css">

  </head>
  <body>
    <header>
    <div class="hero-image" style="height: 200px;"></div>
    <nav>';
			include("menu.php");
		print '</nav>
    <header>
    <main>';
    if (isset($_SESSION['message'])) {
			print $_SESSION['message'];
			unset($_SESSION['message']);
		}
    if (!isset($_GET['menu']) || $_GET['menu'] == 1) { include("home.php"); } 
	
	
	else if ($_GET['menu'] == 2) { include("news.php"); }
	
	
	else if ($_GET['menu'] == 3) { include("contact.php"); }
	

	else if ($_GET['menu'] == 4) { include("about-us.php"); }

    
    else if ($_GET['menu'] == 5) { include("gallery.php"); }

    else if ($_GET['menu'] == 6) { include("register.php"); }

    else if ($_GET['menu'] == 7) { include("signin.php"); }

    else if ($_GET['menu'] == 8) { include("admin.php"); }
    
    else if ($menu == 9) { include("admin/hnb-json.php"); }

    print '
    </main>
    <footer>
      <p>Copyright &copy; ' . date("Y") . ' Ante Ramljak <a href="https://github.com/Ante372?tab=repositories">Github profil</a></p>

    </footer>

  </body>
</html>';
?>
