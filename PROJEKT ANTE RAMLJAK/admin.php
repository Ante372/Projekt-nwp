
<?php 
	if ($_SESSION['user']['valid'] == 'true') {
		if (!isset($action)) { $action = 1; }
		print '
		<h1>Administration</h1>
		<div id="admin">
			<ul>
				<li><a href="index.php?menu=8&amp;action=1">Users</a></li>
				<li><a href="index.php?menu=8&amp;action=2">News</a></li>
			</ul>';
			
			if ($action == 1) { include("admin/users.php"); }
			
			
			else if ($action == 2) { include("admin/news.php"); }
		print '
		</div>';
	}
	else {
		$_SESSION['message'] = '<p>Registriraj se svojim korisnickim podacima!</p>';
		header("Location: index.php?menu=7");
	}
?>