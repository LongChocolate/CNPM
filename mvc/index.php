<?php
	if (isset($_GET['controller']))
	{
		$controller = $_GET['controller'];
		if (isset($_GET['action']))
		{
			$action = $_GET['action'];
			$class = $_GET['class'];
		}
		else
		{
			$action = 'index';
			$class = $_GET['class'];
		}
	}
	else
	{
		$controller = 'admin';
		$action = 'index';
		$class = 'Staff';
	}
	require_once('route.php');
?>

